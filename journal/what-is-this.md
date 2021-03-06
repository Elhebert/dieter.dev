---
title: What is this ?
date: 2018-02-07
archived: true
---

# What is this ?

Couples of months ago I was building some stuff for work, but because it's client related I can't really share the code to show what I'm doing.

I decided to start a blog. The idea was simple, it would be a place where I can talk about what I'm working on without showing any _private_ information about a client project. It would also be a place where I can write (_very_) short thought that are on my mind and that I want to share with the rest of the world.

So, be prepared for some badly writen articles !

### Beneath the hood

When I first had the idea for this blog, I was working on a __content heavy__ platform for a client. A platform for which we _tried_ to build a powerful Rich Text Editor.

We then stumble on [Draft.js](https://draftjs.org/), and I wanted to test it and build a cool RTE to re-use in future project.

Never went further than reading the doc. I never used React before, and I didn't want to learn it and force React for the next projects we would have.

Thanks to a new project at work, I did some r&d on static websites and the [JAMstack](https://jamstack.org/).

My first stop was [Gatsby](https://www.gatsbyjs.org/), a react project that use SSR to render a pure static website, and still let you use react to build awesome stuff.
But because I'm I VueJS user, I started to look for a Vue alternative, and found [Nuxt](https://nuxtjs.org/). It look awesome, but I found it a bit complex to create a simple blog with __markdown__ files as storing.

I decided to turn to what I knew and used everyday, which is, Laravel. The basic idea is to cache everything to make it super fast.

I won't go to detailed explanation, you can check the code on the [github repo](https://github.com/Elhebert/dieterstinglhamber.me).

Here's some great packages that I used:

- [Spatie/YamlFrontMatter](https://github.com/spatie/yaml-front-matter) to parse my markdown file to extract my metadatas (like the title) writen in yaml.
- [TailwindCSS](https://tailwindcss.com/), which is an awesome css framework made by Adam Wathan.
- [Laravel Mix PurgeCSS](https://github.com/spatie/laravel-mix-purgecss) writen by Spatie, which allow me to reduce my css size by... I don't have the exact number here, but it was _a lot_.

It still need some work, mostly on the front-end side. Being a back-end developer, css and styling isn't my cup of tea, help and advice is more than welcome !
