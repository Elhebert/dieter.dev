---
title: Removing the XSRF cookie programmatically in Laravel 5.7
date: 2018-09-25
archived: true
---

# Removing the XSRF cookie programmatically in Laravel 5.7

I wrote a blog post couples of month ago about removing all cookies from a fresh Laravel application, but since then Laravel 5.7 release with a cool new feature that people might have missed.

One of the biggest improvements in 5.7 is the arrival of a new attribute in the `VerifyCsrfToken` middleware, `addHttpCookie`.

The middleware is checking the value of that variable, and depending on its value (`true` or `false`), it’ll add the cookie to the request or not.

```php
if ($this->addHttpCookie) {
    $this->addCookieToResponse($request, $response);
}
```

Which make it simpler than removing a middleware. The only problem is that its either `true` or `false` for all of your pages, it doesn’t allow you to remove it from some pages and add it to other.

A good example would be if your public facing website doesn’t need the XSRF cookie but your admin dashboard needs it.

Fear not, because with the (currently) last version of the framework, 5.7.6 comes a new function that you can override `shouldAddXsrfCookie`:

```php
/**
 * Determine if the cookie should be added to the response.
 *
 * @return bool
 */
public function shouldAddXsrfTokenCookie()
{
    return $this->addHttpCookie;
}
```
And instead of checking the value of the `addHttpCookie`attribute it checks the results of the function.

This allows us to programmatically set the cookie, let’s go back to the admin dashboard example. Let’s say you are using Nova, thanks to this new function you can do:

```php
public function shouldAddXsrfTokenCookie()
{
    return request()->is('nova*');
}
```

With this people that’ll visit your website won’t have the XSRF cookie set, but it’ll still be set and used for the Nova authentication and all the Nova forms (and api calls).
