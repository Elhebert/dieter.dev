---
title: Join the light side, we have no cookies.
date: 2018-06-27
archived: true
---

# Join the light side, we have no cookies.

If you haven't been in hibernation the last couples of weeks you might have heard of something called

![GDPARRR](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/gdpar.jpg)

Since May 25th you have been harassed by "_We have updated our privacy policy_" emails but also websites started to great you with "_Please, let us and our 256 partners track you_".

In response to these _abusive_ practices, some developers have decided to follow a better path, removing every cookie that is not needed. For example, my website doesn't have a single cookie, Spatie new website won't have any either.

[![Spatie new website won't have cookies - Freek Van der herten](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/spatie-no-cookies.jpg)](https://twitter.com/freekmurze/status/1010173255267831809)

I encourage every developer to do the same and if you are using **Laravel**, here's how you can (_very_) easily get rid of the default cookies set by the framework.



---

Before we start I want to point out that cookies that are essentials, like the CSRF to secure a form or a session when you have a login form, don't need you to ask an explicit approval by your user. You still need to list them in a _cookie policy_ page though.

### CSRF Token

> I'm [currently looking](https://twitter.com/Elhebert/status/1011531866980143104) into removing the need for a cookie to prevent CSRF attacks, but haven't found anything conclusive for the moment. If you have some inside for this, let me know!

If you don't need to prevent CSRF attack (ie. you don't have forms on your website), you can (and should) get rid of this cookie. Luckily Laravel allows you to remove it without having to spend tons of hours deep in the code.

The CSRF token is added by a middleware if we remove it, we remove the cookie. Open `app/Http/Kernel.php` and look for `$middlewareGroups`.

The middleware you want to remove (or comment) is `\App\Http\Middleware\VerifyCsrfToken::class` in the `web` group. When it's done, reload your browser, open the console and... it's gone.

Such wow 😱

### Session cookie

If you don't plan to store data in session or if you plan on having a stateless application (eg. using JWT) this cookie is useless for you.

Similar to the CSRF token, to remove the session cookie, all you need to do is removing some middleware from the `web` group.

Here are the two middlewares that are responsible for the session.

```php
\Illuminate\Session\Middleware\StartSession::class,
\Illuminate\View\Middleware\ShareErrorsFromSession::class,
```

Reload, and enjoy.

### And for my last trick...

You might have spotted it, but in the `middlewareGroups`, there are two more middlewares we can get rid of the remove all cookies completely.

```php
\App\Http\Middleware\EncryptCookies::class,
\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
```

Now you have successfully removed all cookies from your Laravel application. You can now enjoy the carefree, cookie-free, experience on your site.

---

I'm sure there are other ways to achieve the same result, better or worst. This is how I did it for my website and it worked, that is the most important thing in our industry. People will always have better solutions, no matter how perfect your code is.

If you would have done it differently or if you did it in another way, let me know! Always grateful to learn new stuff.
