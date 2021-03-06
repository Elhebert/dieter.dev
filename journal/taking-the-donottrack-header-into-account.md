---
title: Taking the DoNotTrack header into account
date: 2018-07-27
archived: true
---

# Taking the DoNotTrack header into account

I mentioned it in my [previous post](https://dieterstinglhamber.me/gdpr-compliant-tracking) most browsers have the possibility to send a DNT (Do Not Track) header with every request. In a perfect world, every website should check its existence and act accordingly.

According to [Wikipedia](https://en.wikipedia.org/wiki/Do_Not_Track), this header exists since 2009 and I'm confident saying that most of the websites are not even checking for it pre and post GDPR.

The best solution would be not to track users, but the choice isn't always yours to make (example: client requests). In such cases, you will have to ask your users their permission to track them.

But isn't it redundant to ask a user if he accepts to be tracked using personal idendifiable informations if his browser is already telling you that he doesn't want to be tracked?

And even if you are using a no cookies tracking system that is DNT compliant, is it really useful to load your frontend js tracking script if the user doesn't want to be tracked?

Let's see how to implement that using Laravel.

---

We will look at 2 different scenarios:
1. You only have 2 choices: with and without PII cookies.
2. You have multiple levels of cookies: necessary cookies (session, csrf), preferences (languages selection) and PII cookies.

We will assume that you are checking a `cookie-policy` cookie to show or hide the banner with the cookie choices.

```php
@if(\Cookie::has('cookie-policy'))
    <!-- Show a banner with the choices -->
@endif
```

# With or without PII

Let's assume that the 2 choices you have are _basic_ and _full_, your view could look like this

```php
@if(\Cookie::get('cookie-policy') === 'full')
    <!-- Track the user -->
@endif
```

As you might know, the best way to check something before loading the actual page is to use a middleware.

```sh
$ php artisan make:middleware DoNotTrack
```

```php
public function handle($request, \Closure $next)
{
    if ($request->header('DNT') === '1') {
        \Cookie::queue('cookie-policy', 'basic', 43830);
    }

    return $next($request);
}
```

The last step is to add the middleware to the `web` middleware group in `app/Http/Kernel.php`.

```php
protected $middlewareGroups = [
    'web' => [
        // ...
        \App\Http\Middleware\DoNotTrack::class,
    ],
];
```

Now, visit your website and...

The cookie is there but it doesn't work, but if you refresh the page again it's working.

I'm not sure if it's related to Laravel, but you can't add a cookie and read it in the same request. The best solution I've found is to use both the session and a cookie to remember the user's choice.

Let's update our middleware:

```php
public function handle($request, \Closure $next)
{
    if ($request->header('DNT') === '1') {
        \Cookie::queue('cookie-policy', 'basic', 43830);
        session()->push('cookie-policy', 'basic');
    }

    return $next($request);
}
```
And you can now update the banner (and every check you are making for the cookie choice) to also check in the session.

```php
@if(\Cookie::has('cookie-policy') || session()->has('cookie-policy'))
    <!-- Show a banner with the choices -->
@endif

<!-- ... -->

@if(\Cookie::get('cookie-policy') === 'full' || session()->get('cookie-policy') === 'full')
    <!-- Track the user -->
@endif
```

Now, even the first time you visit the page, it's taking the DNT into account and won't ask the user if he wants to be tracked.

# Multi-choices cookies policy

For this use case let's pretend that you have 3 levels of cookies:
1. Those required by the website to function properly
2. Those that will remember user preferences
3. The cookies that identify the user for tracking purposes or media targetting

Because you have only one of the three choices that involve identifiable data, you won't need to use a middleware. It also makes this implementation easier.

Let's assume this is what your banner looks like

```php
<form>
    <input type="checkbox" name="necesarry" checked disabled>
    <input type="checkbox" name="preferences" checked>
    <input type="checkbox" name="tracking" checked>
</form>
```

In case of the presence of the DNT header, you can:

- remove the default checked state.

```php
<form>
    <input type="checkbox" name="necesarry" checked disabled>
    <input type="checkbox" name="preferences" checked>
    <input
        type="checkbox"
        name="tracking"
        @if (request()->header('DNT') !== '1')
            checked
        @endif
    >
</form>
```

- remove the default checked state and disable the input.

```php
<form>
    <input type="checkbox" name="necesarry" checked disabled>
    <input type="checkbox" name="preferences" checked>
    <input
        type="checkbox"
        name="tracking"
        @if (request()->header('DNT') !== '1')
            checked
            disabled
        @endif
    >
</form>
```

- remove the input.

```php
<form>
    <input type="checkbox" name="necesarry" checked disabled>
    <input type="checkbox" name="preferences" checked>

    @if (request()->header('DNT') !== '1')
    <input
        type="checkbox"
        name="tracking"
        checked
    >
    @endif
</form>
```

Personally, I would remove the input altogether, because it makes more sense, but that is a personal choice.

---

We've seen how to respect the user wish not to be tracked if he's sending a Do Not Track header along with each request.

It might be more complex to implement depending on your code, but it isn't a complex process and it boosts the UX of your website, so in my book, it's an easy win, especially now that the GDPR made lots of people realize how much we were tracked online and stop blindly trusting website with their data.
