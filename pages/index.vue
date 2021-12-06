<template>
  <Head>
    <Title>Dieter Stinglhamber - Home</Title>
    <Meta name="description" content="Dieter Stinglhamber personal website" />
  </Head>

  <article>
    <section>
      <div class="sm:pt-40">
          <h1 class="text-xl font-medium">Dieter Stinglhamber</h1>
          <p class="text-5xl leading-snug ml-[-.1rem] font-black">
              Makes shit happens since <time datetime="2015" class="text-[#ECC127]">2015</time>
          </p>
          <p class="mt-5 text-xl">
              I write in PHP, JS, HTML and CSS.<br>
              I can talk to databases and make servers do stuff.
          </p>
      </div>

      <div class="py-16">
        <div class="background-image h-full max-h-[48rem] w-full rounded-xl shadow-lg"></div>
      </div>
    </section>

    <section class="mt-16 prose leading-loose max-w-none">
      <p class="text-[#ECC127] text-3xl leading-snug font-black">About me</p>

      <p>In a few words:<br>🧞 Weird, 🧙‍♂️ different, 🤓 quirky, 📢 loud, 🤣 funny.</p>
      <p>👨‍💼 I don't know how to act my age. I've never been this old before.</p>
      <p>🇧🇪 I'm Belgian but for the last couple of years I've been living in Germany 🇩🇪.</p>
      <p>💬 I speak both French 🇫🇷, English 🇬🇧 and basic Spanish 🇪🇸.</p>
      <p>🧸 I love Disney cartoons and movies. My all-time favorite is Beauty and the Beast 🌹 (with Emma Watson).</p>
      <p>🧜 I take "You're weird" as a compliment.</p>
      <p>🤡 I can't take myself seriously. I'm a master in the art of self-mockery.</p>
      <p>👟 I wear Chuck Taylors (Converse) of different colors: Blue and Yellow at the moment. And I always wear unmatched funky socks, I'm weird like that.</p>
      <p>💇‍♂️ I tend to change hairstyle a lot. During the various lockdowns I went from (fake) dreads to a red mohawk, a purple mohawk, then I shaved my head.</p>
      <p>🎄 I LOVE Christmas. It's the best time of the year! As soon as <time datetime="12-01">December 1st</time> arrives I dust off Micheal Bubble Christmas album and enjoy wearing my "Ugly X-Mas sweater".</p>
      <p>🏃‍♂️ I used to do sport but now I'm lazy. I mostly ran. On the best days, I used to do about 20 - 30km per week. I ran a semi-marathon and a couple of 20km races. I even attempted a marathon once (Brussels Marathon <time datetime="2018">2018</time>) and gave up after 36km. I was close to the finish, I know, but after <time datetime="PT4H16M">4h16</time> I could barely walk. I hit that god forsaken wall. I learned that there are things that you can't go unprepared for. But it was fun. I'd like to one day attempt that again. But I will need to train seriously for that.</p>
      <p>🛒 I don't like Amazon. I always favor local brick-and-mortar stores and if I need to buy something online I'll go to a smaller, more local store. Amazon will be my very last resort if I exhausted all other possibilities. Recently I started to buy more and more second-hand, especially board games.</p>
      <p>🚫 Unnecessary plastic is unnecessary.</p>
      <p>🔒 I value my privacy, especially online. I'm only present on Twitter and barely post these days. I'm going to clean my feed at some point. I don't have WhatsApp. I hate the "I have nothing to hide" argument when talking about personal data collection. There's nothing more annoying to me than having to give more data than necessary when registering for a service. I don't like when people use "Google" as a verb. And I'm against voice assistance and IoT that have to be connected to the internet to work.</p>
    </section>

    <section class="mt-16 bg-[#FAF8EF] border border-[#ECC127] w-full py-12 px-3 flex flex-col justify-center items-center">
      <p class="text-[#ECC127] mb-12 font-bold text-center text-xl" style="font-variant: small-caps;">
        Trusted by at least 5 differents companies
      </p>

      <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 justify-items-center items-center w-4/5">
        <li>
          <a class="h-10 flex items-center" href="https://escaux.be" title="Escaux">
            <img src="https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1638784807/dieter.dev/escaux.png" alt="Escaux" class="w-full h-auto">
          </a>
        </li>

        <li>
          <a href="https://miysis.be" title="Miysis"><SvgMiysis class="text-black w-32" /></a>
        </li>

        <li>
          <a href="https://altavia-act.com" title="Altavia ACT*"><SvgAltaviaAct class="w-36" /></a>
        </li>

        <li>
          <a href="https://trivago.com" title="trivago"><SvgTrivago class="w-36" /></a>
        </li>

        <li>
          <a href="https://strapi.io" title="Strapi"><SvgStrapi class="w-36" /></a>
        </li>
      </ul>
    </section>

    <section class="mt-16 prose leading-loose max-w-none">
      <p>I studied IT System and Network Administration in Belgium and did one year of Computer Engineering in Ireland. I don't really remember what I learned. But it got me into web development, so I guess it was worth it.</p>

      <p>I started my career by working for a TelCo company. For a year I worked on legacy PHP system. When I say legacy I mean legacy. It was a PHP 5.3 codebase that was about 10 years old. It had a single folder containing over 1000 php files without consistent linting or coding style. 🤮</p>

      <p>After that I joined a startup. It was created by the CEO and CTO of 3D design company. They wanted to create a SAAS platform for project handling (task management, invoicing, etc...). But it became clear very quick to me that they had no idea on how tech works. Every other week they would ask to remove or add a feature. In the 6 months I worked there we had nothing to show for it. That's when I decided to leave.</p>

      <p>I then joined a marketing agency, Altavia ACT, specialized in big retailers (Carrefour, Tom & Co, Metro, Badoit, etc...). On top of creating different kind of websites for them I also took over the whole releasing pipeline. When I joined they had a single server with over 150 websites. When I left they had a single Digital Ocean instance per site with automated provisioning and deployment thanks to a series of Ansible and bash scripts which slowly migrated to Laravel Forge.</p>

      <p>I worked for 2 years for (hotel?) trivago. I was involved in the development of a marketplace platform where hoteliers would be able to buy and use tools/apps to manage their properties on trivago.</p>

      <p>And finally I joined Strapi as a Backend Engineer.</p>
    </section>

    <section class="mt-16 prose leading-loose max-w-none">
      <p class="text-[#ECC127] text-2xl leading-snug font-black">Video games</p>

      <p>I play a lot of video games, too much is you ask my parents. When I was a kid this was my escape. I play mainly on my computer, but I'm also the proud owner of a PS5. I have a PS3 to play to Sing Star, a Wii to play Wii sport with the family. I also have a Switch because I need to be able to play Skyrim on the go or on the toilet 🚽.</p>

      <p>My Favorite games are (in no particular order):</p>

      <ul>
        <li class="ml-8">Dark Souls 1 and 3</li>
        <li class="ml-8">Demon Souls (PS3 and PS5)</li>
        <li class="ml-8">Bloodborne</li>
        <li class="ml-8">Mass Effect 1,2 and 3.</li>
        <li class="ml-8">Dragon Age: Origins and 2.</li>
        <li class="ml-8">TES5: Skyrim</li>
        <li class="ml-8">Diablo 3</li>
        <li class="ml-8">The Last Of Us</li>
        <li class="ml-8">Horizon Zero Dawn</li>
      </ul>

      <p>As you can see I play mostly solo games. I like RPGs and games with good stories. I also like to pretend that I'm good at From Software game.</p>
    </section>

    <section class="mt-16 prose leading-loose max-w-none">
      <p class="text-[#ECC127] text-2xl leading-snug font-black">My kingdom for board games</p>

      <figure class="my-8 text-center">
        <img src="https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1638790367/dieter.dev/shelf.jpg" class="rounded-xl shadow-lg mx-auto" alt="boardgame shelf">
        <figcaption>Here's a picture of what my shelves currently look like</figcaption>
      </figure>

      <p>I love board games. I've been in the hobby for about <time duration="PT156W">3 years</time> now. I have transformed my living room into a gaming room. The only thing missing is the board game table, but fear not it has been ordered. I just need to wait until next <time datetime="06-2022">June</time> for it to be build and delivered (Crowdfunding is always fun to wait for).</p>

      <p>When I was still living in Belgium I used to visit my parents every weekend so I could play Ticket to Ride and Azul with my mom. When I worked for trivago I started to organize weekly meetup to be able to buy and play more games.</p>

      <p>Recently I started to play games remotely with my parents and friends. So here's a list of games that works over video call. Of course, both side need to own the game and some coordination is required:</p>

      <ul>
        <li class="ml-8">Cartographer</li>
        <li class="ml-8">Codenames</li>
        <li class="ml-8">Azul</li>
        <li class="ml-8">Ticket to Ride</li>
        <li class="ml-8">Roll Player</li>
        <li class="ml-8">Carcassonne</li>
      </ul>

      <p>There's probably lots of other games that can work but these are the one we played so far.</p>

      <p>I also play Dungeons and Dragons. When the very first lockdown started in Germany I just started a campaign with some colleagues. Since I knew the most I took the role of the Dungeon Master. We played a year-long campaign that finishes end of <time datetime="06-2021">June 2021</time>. And I'm already planning our next campaign that <span class="line-through">should start end of <time datetime="09-2021">September</time></span> started early <time datetime="11-2021">November 2021</time>.</p>
    </section>
  </article>
</template>

<script lang="ts" setup></script>
