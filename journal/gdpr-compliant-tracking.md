---
title: Look mum, no cookies!
date: 2018-07-11
archived: true
---

# Look mum, no cookies!

> I had a very good introduction, but I realized it was spoiling some Star Wars 8 stuff, so I removed it.

After the GDPR hit, I kept looking into solutions to gather useful information about our users. Information like the browser and the OS used to browse a website. With those data, you can decide whether to drop the support of a certain browser due to the lack of users.

One of my ideas was to build a platform that would gather information collect from the backend and return statistics, basically an analytics tool and instead of building something from scratch I decided to investigate what could be done to keep using a tracking tool and stay GDPR compliant avoiding to bother the visitors for his approval.

I won't do a full article about what it means to do GDPR compliant user tracking. The team behind Matomo wrote a very [good blog post](https://matomo.org/blog/2018/04/how-to-not-process-any-personal-data-with-matomo-and-what-it-means-for-you/) about this, and I encourage you to read it.

I've looked into the [Measurement Protocol](https://developers.google.com/analytics/devguides/collection/protocol/v1/), Google backend API, and [Matomo](https://matomo.org/).

---

# Measurement Protocol

To stay brief, this API allows you to track users from your backend (in addition or instead of the javascript library of Google Analytics).

The big issue with Google Analytics (and the Measurement Protocol) is that it relies on a unique ID to identify a user and the best way to keep track of a unique ID in between sessions is by soring it into a cookie.

And... surprise, this isn't GDPR compliant, that ID is considered as PII.

The only way to go around this is to generate a new ID for each visit. I admit this isn't a great solution, the statistics will be inaccurate but you will still have some data about the persons which visits your website.

So I decide not to use this solution for my website and went to check Matomo out.

# Matomo

What I like about Matomo (in addition to being open source and able to be self-hosted) is that to keep track of a recurrent user, it'll build a _profile_ using data like screen size, browser version, OS, viewport. The advantage is that it'll be able to give you more accurate data than having a new entry for each visit.

These data have the advantage of being completely anonymous but it also means that multiple people can be identified as being the same person.

## Matomo and Laravel

Matomo gives you the possibility to use both frontend and backend tracking and still being GDPR compliance thanks to a little option `disableCookies` (for the JS script) and `disableCookieSupport()` (for the PHP library).

I've made a small and very simple wrapper to use Matomo with Laravel for my website. I probably will turn this into a package at some point but for now, you can check it out on [GitHub](https://github.com/Elhebert/dieterstinglhamber.me/blob/master/app/Services/Analytics/PiwikTracker.php). It's very opinionated and focused on my own use case.

#  Do Not Track

A feature I really like about Matomo is the _DoNoTrack_ support. If you didn't know, browsers have the possibility to send a _DoNotTrack_ header. If a users visit your website that header is the request, Matomo won't collect data.

But what if you are using Google Analytics or a custom tracking tool? Well, fear not young padawan, you can implement a similar feature easily.

Using Laravel you can use the `request()->header()` method to check for the existence of the `DNT` header:

```php
if (empty(request()->header('DNT')) {
    // You can track the user (with his explicit approval of course).
}
```
Here's what Firefox is sending to my website when I'm browsing it.

![DNT header](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/dnt-header.jpg)

---

I'll be honest I wanted to do a post-oriented on the code side of things, but I realized mid-writing that all I was doing was commenting the code I wrote and posting my code would have been more useful. Thus I decided to write about what I learned about analytics and GPDR and share that knowledge. I really hope it was useful and not too boring to read.
