---
title: The Good, the Bad and the Ugly of seeding data in production
date: 2018-05-31
archived: true
---

# The Good, the Bad and the Ugly of seeding data in production

I had the idea for this article after my coworker asks this question in one of our repositories.

![Laravel seeding and migration](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/laravel-seeding-and-migrations.jpg)

We talked about it in the comments and _IRL_ and this article is what came out of that discussion, so let's dive into it!

---

Let's say you have a Laravel website (or an app) that required initial data when deployed for the first time. The easiest way to achieve this is to use a `Seeder`. Design to seed test data, I think it's greatly used for seeding the production with some data (an admin user, user roles for example).

```php
public function run()
{
    DB::table('users')->insert([
        'name' => 'John Doe',
    ]);
}
```

The main issue with seeding data is that you don't want to seed that data on every deployment, so you will have to manually trigger the seeding with an artisan command (`php artisan db:seed`). Which is, let's face it, annoying.

## tl;dr

Use migration to run a seeder. That way, you can enjoy the benefits of migrations and seeders at the same time.

## The Bad

You could use the `firstOrCreate` method on the model to only create the record once (on the initial seeding), and on next deployments, it won't re-create the data. But, personally, I find that solution a bit dirty. And I rather not use a model in a seeder.

```php
public function run()
{
    User::firstOrCreate([
        'name' => 'John Doe',
    ]);
}
```

## The Ugly

Another solution would be to use a migration instead and do something like

```php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increment('id');
        $table->string('name');
    });

    DB::table('users')->insert([
        'name' => 'John Doe',
    ]);
}
```

This is a more elegant solution. Especially considering that migrations are "_versioned_", which means, it'll run once, even if deployed more than once.

Then, to add more data in future deployments, you can create a new migration that adds only the new data

```php
public function up()
{
    DB::table('users')->insert([
        'name' => 'Jane Doe',
    ]);
}
```

But, this solution brings up another problem. When running `php artisan migrate --seed` when setting up the project for the first time (eg. for a local environment), if the data you are adding depends on previously added records, it'll fail because the seeders are run after the migration.

## The Good

The best solution I found is to combine both solutions. Using migration to run seeders. That way, we solve the issue where seeders are run after migration (which make it impossible to add new records from a migration if it depends on previously added data).

Here's how we can do this, first create the initial migration

```php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increment('id');
        $table->string('name');
    });
}
```

And create a seeder

```php
public function run()
{
    DB::table('users')->insert([
        'name' => 'John Doe',
    ]);
}
```

Now, the magic. Update the migration to add an `Artisan::call()` to run the seeding command from the migration

```php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increment('id');
        $table->string('name');
    });

    Artisan::call('db:seed', [
        '--class' => UsersTableSeeder::class,
    ]);
}
```

When migrating the database, it'll seed the data right after the table is creating. This means, when deploying automatically (eg. with Envoy), you only have to run `php artisan migrate --force`. It'll run each time, but it'll only run each migration once. Which also mean, running each seeder once.

To add additional data, we can do the exact same thing, we create a seeder and a migration to call it. The new migration will run on the next deployment and only that time. Which results in the seeded data bein added only once.

```php
// NewUserSeeder.php
public function run()
{
    DB::table('users')->insert([
        'name' => 'Jane Doe',
    ]);
}

// <timestamp>_add_new_user_migration.php
public function up()
{
    Artisan::call('db:seed', [
        '--class' => NewUserSeeder::class,
    ]);
}
```

You might want to add a `--force` argument to the artisan command. When in production you are prompt to confirm that you want to seed data or run migrations, if, like me, you have automated the deployments you can't answer prompt, therefore the `db:seed` will never run.
