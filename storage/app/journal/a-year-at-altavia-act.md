---
title: A year at Altavia Act*
date: 2018-04-17
---

# A year at Altavia Act*

When I arrived at Altavia Act*, they had one big (huge) server that would host everything, `titan` they called it. It hosted about 150 different websites (both production and staging environment). It also served as VCS (git) remote for some projects. They also had one project on Gitlab.

All the maintenance, upgrade, libraries installation or any _ops_ stuff had to go through an external contractor (which had handle the setup and configuration of said server).

To be fair, it wasn't so bad, it came with a small packages to _automated_ certain tasks like list, create, update or remove a vhost. A simple `wok add example.com -v` would get you a small menu with a number of choices. You could choose to add a nginx server, a PHP configuration, a mysql, postgres or mongo database. And it would create a user, and all files or processes needed to run it.

For each website the nginx configuration has a server on port 80 and one on port 443 (that is commented). It has its own PHP pool, thought it's running on the same PHP process than every other site. A unique user is created and owns every files (nginx config, PHP pool, ...) and a unique mysql user is also created (along with its personal database).

A previous developer had created a UI tool in Java to run the `wok` command from the desktop. It would also allow to open Sequel Pro for a given database, or open the terminal and an ssh connection to the website vhost. It's quite handy for non-technical people to have quick information or quick access to a given database or ftp.

# From WordPress to Laravel

Most of the websites hosted on the server were WordPress's hacked together using bits and pieces. I think it's common to agencies to use WordPress, it's fairly easy to setup and configure, and once it's in production, the client can manage it himself.

Mehdi, my front-end colleague, started to migrate to Laravel for newer website (when the budget allowed it). Which is an awesome decision, and I'm sure it wasn't easy to sell. Going from a "_ready to use_" CMS to a fully custom solution isn't something that is easily accepted by management, most likely due to the longer and more complex development process.

> Note from Mehdi: It wasn’t hard to sell Laravel as, once the _emergency month_ (when I arrived at Altavia and tons of things had to be done) was behind me, the two first projects I worked on were completely out of the default WordPress scope. It was probably also the two first projects at Altavia that did not encounter any trouble, so from their everyone understood that tailor-made Laravel babies grow better than WordPress ones.

We are now using only Laravel. It's a really great framework with a nice ecosystem (Scout, Socialite, Envoy, Horizon ...), and it allow us to offer great solution to our client. We try as much as possible to use community packages and to contribute when possible. I think that one of our first stop is Spatie's Github, they have packages for almost everything, it's unbelievable.

Our goal this year is to offer fully _custom_ experience to our users. We want to offer a website that would be browseable with and without CSS or JavaScript. And with the GDPR we are looking into offering a cookie-free experience. We believe that it's important to acknowledge that you don't have a perfect internet connection or that the user values their privacy.

> Funny thing is, when I started there, I was on board of the JS hype train. I remember couples of month ago, I was talking with my colleague about js on the front end side. And he was (and still is) a fervent defender of being able to have a working website even when the JavaScript is disabled. I recall telling him that the small percentage of people disabling JS shouldn't stop us to do a SPA website.
> And last week we were talking about an upcoming project, and I told Mehdi "_wouldn't it be great to offer the possibility to remove CSS or js from the website and still offering a proper experience?_". Quite the turn over.

# GitLab, then GitHub

Before I arrived, Mehdi had started to try GitLab with one (big) project. After my arrival, we continued to use GitLab for a couple of months, and used it for 4 or 5 projects. But we decided to switch to a private Github organisation.

The issue we had with GitLab was simple. It did the job perfectly, but we wanted to have a company organisation on GitHub to show off our skills (mostly inspired by [Spatie](https://github.com/spatie)'s work). It took time (about _2-3 months_) and a couples of meeting with our manager, but we got our private Github Team account.

We had big dreams, contributing to Open Source, creating tons of packages, having awesome workflows. Our first step was to create a styleguide, a source of truth in case of conflict. A document that would hold all our workflows, codingstyle and other pertinent information.

Mehdi and I are very different people, we think and code differently, and we love different things. It's nice to have someone that doesn't think like you to challenge your ideas. Writing coding style together was a very hard exercise, one that we haven't finished yet. Our process is simple, we write some rules down, we try to apply them, we then accept them, refuse them or improve them.

It takes time, a lot of time. Deciding on how to work together is not something you should decide alone and in 5 minutes. But I'm confident that, at some point we'll find common ground.

# Nucleus, Titan and OVH are sitting in a tree

For their first _big_ project, they knew that Titan wouldn't be a fit. They decided to host it with [Nucleus](https://www.nucleus.be/), a Belgian company that offers "_Uptime as a Service_". The service they took is a fully managed server, which was perfect because they had nobody in the team that could manage a server. We still do use Nucleus to host larger project where a _high_ visit load is expected.

When Laravel 5.5 arrived, we migrate to it for newer project. But something we didn't took into account, was that it depended on PHP 7+, and Titan was currently running PHP 5.6. We had to make a decision, where would we host our new projects, would we take servers on Nucleus, take a new server to have an updated version of Titan?

We first took a VPS SSD1 on OVH to host our `dev` environment for which I did the setup and configuration. But we never took an actual decision on what our server infrastructure would be. For a while we used VPS Cloud to host our _time limited_ projects. I think the decision was mainly taken due to the automated scripts I had made with Ansible. It allowed me to setup and configure a server in a couple of minutes, thus, saving lot of time.

A big issue with our current infrastructure is that, part of the projects are hosted on Titan (depending on the requirements), part are on OVH VPS's and some are on Nucleus's servers. And I'm the one responsible for it, if I'm not at the office, they can manage Titan and Nucleus (thanks to their awesome support), but for projects that need to be hosted on a VPS or even if a problem occurred with a VPS, they don't have any knowledge for that.

The only monitoring we have is a proof-of-concept I made when [OhDear!](https://ohdearapp.com/) was released. I was curious to see how I could achieve a monitoring tool that would check the uptime of a website. As for the backups, Titan is being backups integrally once a day (handled by the external contractor), but that's all we have.

# What the future holds

In the last year, we did some incredible changes for a team like ours, and we aspire to do even more this year. I had a meeting with my manager to present what I called _Why we should have a CI pipeline in place_. We have barely started to tests our applications, we deploy some newer project from Github and we are reviewing each other's code.

Having a CI pipeline means automated testing, but that also means having a test runner. For the moment I'm thinking about using Jenkins, but this might change in the future. None of us have a real experience in setting up a CI environment, we know that it would be a big step forward. But it's going to be a long road, and we have to include the whole team in the process. We can't make changes for only Mehdi and me. We have other people on the team that are not as familiar as us with our tools and workflows.

Aside from that, I'm also working on a proposition to improve our hosting, monitoring and backup strategy. It's not an easy task, having to budgetize every decision and taking into account that not everything can be invoiced back to the client. You can't expect the client to pay for the tools you are using to make your life easier. Those have to be investment by the company.
