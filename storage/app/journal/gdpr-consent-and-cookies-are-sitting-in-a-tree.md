---
title: GDPR, consent and cookies are sitting in a tree...
date: 2018-08-27
archived: true
---

# GDPR, consent and cookies are sitting in a tree...

Have you ever visited a website and the first thing you saw was a popup blocking the navigation to ask you what kind of cookies you wanted?

Annoying right!?

Lots of companies are misunderstanding what the GDPR actually is and how it impacted the web, especially cookies. My own company included:

![Altavia ACT* cookies banner](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/altavia-act-cookie-banner.jpg)

People think that because you need to ask consent for analytics cookies, you need to ask consent for every single cookie.

I'm not a lawyer, so I'll do my best to go through the GDPR and the European law to see what is actually permitted and what is not.

---

# Cookies in the GDPR

The GDPR is centered around personal data, not cookies and because I'm lazy I did a simple word search on the GDPR text and found exactly one mention of cookies in the GDPR, which is in [recital 30](https://eur-lex.europa.eu/legal-content/EN/TXT/?qid=1528874672298&uri=CELEX%3A32016R0679).

Quoting the recital:

> Natural persons may be associated with online identifiers provided by their devices, applications, tools, and protocols, such as internet protocol addresses, cookie identifiers or other identifiers such as radio frequency identification tags. This may leave traces which, in particular when combined with unique identifiers and other information received by the servers, may be used to create profiles of the natural persons and identify them.

From what I understand the short version is that cookies can be used to store Personal Identifiable Information (PII). It's doesn't talk about consent at all.

I found [recital 32](https://eur-lex.europa.eu/legal-content/EN/TXT/?qid=1528874672298&uri=CELEX%3A32016R0679) which is all about consent:

> Consent should be given by a clear affirmative act establishing a freely given, specific, informed and unambiguous indication of the data subject's agreement to the processing of personal data relating to him or her, such as by a written statement, including by electronic means, or an oral statement. This could include ticking a box when visiting an internet website, choosing technical settings for information society services or another statement or conduct which clearly indicates in this context the data subject's acceptance of the proposed processing of his or her personal data. Silence, pre-ticked boxes or inactivity should not, therefore, constitute consent. Consent should cover all processing activities carried out for the same purpose or purposes. When the processing has multiple purposes, consent should be given for all of them. If the data subject's consent is to be given following a request by electronic means, the request must be clear, concise and not unnecessarily disruptive to the use of the service for which it is provided.

In other words, according to the GDPR, we don't need a consent to use a cookie on our website. We need an explicit consent to process PII.

So, if you store PII in a cookie (like in the case of analytics cookies) you need to ask for user consent, in every other case, you are free to use cookies.

# Cookies in the ePrivacy Directive

However, we still need to be compliant with the [ePricavy Directive](http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm) which requires us to have a Cookie Policy with all the details about our cookies. It also requires us to inform users that we use cookies on our website and require consent to use them BUT it can be implicit as shown in this screenshot (from the ePrivacy website):

![ePrivacy cookie banner](https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1544637613/dieterstinglhamber.me/posts/eprivacy-cookie-banner.png)

Furthermore, according to the ePrivacy Directive, some cookies are exempt from requiring consent like those:

> used for the sole purpose of carrying out the transmission of a communication, and strictly necessary in order for the provider of an information society service explicitly required by the user to provide that service.

It also give us the following example:
- user‑input cookies (session-id) such as first‑party cookies to keep track of the user's input when filling online forms, shopping carts, etc., for the duration of a session or persistent cookies limited to a few hours in some cases
- authentication cookies, to identify the user once he has logged in, for the duration of a session
- user‑centric security cookies used to detect authentication abuses, for a limited persistent duration
- multimedia content player cookies used to store technical data to playback video or audio content, for the duration of a session
- load‑balancing cookies, for the duration of a session
- user‑interface customization cookies such as language or font preferences, for the duration of a session (or slightly longer)
- third‑party social plug‑in content‑sharing cookies, for logged‑in members of a social network.

# tl;dr

You can use cookies on your website without asking consent and if you want (or need) to have analytics on your website don't show a blocking ugly cookie choice banner. All you need is a non-blocking (small) banner with a line of copy and two buttons.

> Would you authorize the use of tracking cookies? yes - no

Or even better, consider using Matomo, it's free, it's open source and it offers GDPR compliance out of the box.

---

I also wrote a couple of blog post about [no cookie tracking](https://dieterstinglhamber.me/blog/gdpr-compliant-tracking), the [Do Not Track header](https://dieterstinglhamber.me/blog/taking-the-donottrack-header-into-account) and how to [remove cookies from a Laravel installation](https://dieterstinglhamber.me/blog/join-the-light-side-we-have-no-cookies).
