<x-layouts.app>
    <article>
        <section class="mt-16 leading-loose max-w-none">
            <h2 class="text-center text-3xl ml-[-.1rem] font-bold">Trusted by at least <span class="text-[#ECC127]">6</span> differents companies</h2>

            <div
                class="mt-8 w-full py-12 px-3 flex flex-col justify-center items-center"
            >
                <ul
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8 justify-items-center items-center w-4/5 lg:w-full"
                >
                    <li>
                        <a
                            class="h-10 flex items-center"
                            href="https://escaux.be"
                            target="_blank"
                            title="Escaux"
                        >
                            <img
                            src="https://res.cloudinary.com/elhebert/image/upload/c_scale,dpr_auto,f_auto,w_auto,q_auto/v1638784807/dieter.dev/escaux.png"
                            alt="Escaux"
                            class="w-full h-auto"
                            />
                        </a>
                    </li>

                    <li>
                        <a href="https://miysis.be" title="Miysis" target="_blank"
                            ><x-svg.miysis class="text-black dark:text-white w-32"
                        /></a>
                    </li>

                    <li>
                        <a href="https://altavia-act.com" title="Altavia ACT*" target="_blank"
                            ><x-svg.altavia-act class="w-36"
                        /></a>
                    </li>

                    <li>
                        <a href="https://trivago.com" title="trivago" target="_blank"
                            ><x-svg.trivago class="w-36 text-[#37474D] dark:text-white"
                        /></a>
                    </li>

                    <li>
                        <a href="https://strapi.io" title="Strapi" target="_blank"
                            ><x-svg.strapi class="w-32 text-[#212067] dark:text-white"
                        /></a>
                    </li>

                    <li>
                    <a href="https://proton.me" title="Proton" target="_blank"
                            ><x-svg.proton class="w-32 text-[#6D4AFF]"
                        /></a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="mt-16 prose dark:prose-invert leading-loose max-w-none">
            <p>
                I studied IT System and Network Administration in Belgium and did one year of Computer Engineering in Ireland. I don't really remember what I learned. But it got me into web development, so I guess it was worth it.
            </p>

            <p>
                I started my career by working for a TelCo company. For a year I worked on legacy PHP system. When I say legacy I mean legacy. It was a PHP 5.3 codebase that was about 10 years old. It had a single folder containing  over 1000 php files without consistent linting or coding style. 🤮
            </p>

            <p>
                After that I joined a startup. It was created by the CEO and CTO of 3D design company. They wanted to create a SAAS platform for project handling (task management, invoicing, etc...). But it became clear very quick to me that they had no idea on how tech works. Every other week they would ask to remove or add a feature. In the 6 months I worked there we had nothing to show for it. That's when I decided to leave.
            </p>

            <p>
                I then joined a marketing agency, Altavia ACT, specialized in big retailers (Carrefour, Tom & Co, Metro, Badoit, etc...). On top of creating different kind of websites for them I also took over the whole releasing pipeline. When I joined they had a single server with over 150 websites. When I left they had a single Digital Ocean instance per site with automated provisioning and deployment thanks to a series of Ansible and bash scripts which slowly migrated to Laravel Forge.
            </p>

            <p>
                I worked for <time duration="104W">2 years</time> for (hotel?) trivago. I was involved in the development of a marketplace platform where independent hoteliers would be able to buy and use tools/apps to manage their properties on trivago: <a class="no-underline hover:underline font-bold text-[#3736C6] dark:text-indigo-500" href="https://studio.trivago.com">trivago Business Studio</a>. Most of my days were spent on maintaining the code base, refactor aging APIs and work on the payment and subscription manager.
            </p>

            <p>
                After trivago I served as a Senior Backend Engineer at Strapi for a rewarding period of <time duration="126W">2.5 years</time>. During this time, I transitioned into the role of Lead Backend Engineer, spearheading the development of <a class="no-underline hover:underline font-bold text-[#3736C6] dark:text-indigo-500" href="https://strapi.io/cloud">Strapi Cloud</a>. Collaborating closely with the CTO, I played a pivotal role in shaping the architecture and laying the groundwork for the code base that powers Strapi Cloud today. In this capacity, my responsibilities encompassed mentoring fellow engineers, acting as a liaison between our engineering and product teams, and serving as a guardian for the codebase.
            </p>

            <p>
                My daily tasks included aligning our tech strategy with overarching business objectives, overseeing the implementation of technical tests to ensure code quality, and adeptly navigating and resolving challenges. Furthermore, as an integral part of the on-call rotation for the Cloud platform, I remained vigilant to uphold the reliability and functionality of our services.
            </p>

            <p>
                And finally I joined Proton as a Senior Backend Engineer.
            </p>
        </section>

        <section class="mt-16 leading-loose max-w-none">
            <div class="text-center ml-[-.1rem] text-[#ECC127] font-bold">Some things are more important than others</div>
            <h2 class="text-center text-3xl font-bold mb-8">Values</h2>

            <dl class="gap-8 gap-x-16 grid grid-cols-1 lg:grid-cols-2 justify-between">
                <x-value name="Privacy-focus">I value my own privacy online. I believe that we need to also take care of our users' privacy first.</x-value>
                <x-value name="Clean code">Above complexity and fancy design pattern I value clean and readable code.</x-value>
                <x-value name="User first">When designing a feature or thinking about architecural improvement I always take care of not degrading the user's experience.</x-value>
                <x-value name="Work life balance">Work doesn't exist outside of working hours. I don't think my company is like a family. My family and health will always come first.</x-value>
            </dl>
        </section>

        <section class="mt-16 leading-loose max-w-none">
            <div class="text-center font-bold text-[#ECC127]">I'm amazing but don't take my word for it</div>
            <h2 class="text-center text-3xl ml-[-.1rem] mb-4 font-bold">Testimonials</h2>

            <div class="flow-root">
                <div class="sm:columns-2 lg:columns-3 gap-4">
                    <x-testimonial author="Engineering Manager">You care and listen to the opinions of your peers and have a clear and structured way of communicating your thoughts in a manner the audience (ex.: technical vs non-technical round) you currently have can properly follow along.</x-testimonials>

                    <x-testimonial author="Developer">A strength of his is to bring good mood and fun to the team besides technical expertise.</x-testimonials>

                    <x-testimonial author="Developer">Even if things do not go as planned you keep a positive attitude and can transfer this positivity into the team. Keep up the jokes and smile!</x-testimonials>

                    <x-testimonial author="Developer">You give a good overview of the business value and is generally able to justify why you developed something instead of just showing how it works.</x-testimonials>

                    <x-testimonial author="Developer">I love to look into his PRs all the time, I could use that as an example of how to write clean code</x-testimonials>

                    <x-testimonial author="Product Owner">Dieter takes responsibility for important tasks and has participated in all major improvements of the project since he started, both on frontend and backend which is really valuable. His communication is clear and tailored to each audience: I particularly like his release announcements and presentations on open review sessions. He is committed to provide timely and detailed code reviews, which helps the team produce better code on time. He is also engaged on retrospectives and seeks to improve the way we work together constantly.</x-testimonials>

                    <x-testimonial author="Developer">Dieter is a great team lead to work with and to learn from. He is honest, transparent, humble and accessible. Dieter has strong technical skills whatever the topic (frameworks, languages, databases, ...). He's also very good to think out of the box and bring interesting point of views during meetings and on papers.</x-testimonials>

                    <x-testimonial author="Developer">It's nice to have weekly meetings with Dieter where we talk about the product at 360 degrees and align on topics. He is also handling very well the technical leadership of the team</x-testimonials>

                    <x-testimonial author="Project manager">Dieter has strong technical abilities. He's able to think about many aspects of a problem, and quickly identifies consequences of possible solutions. He wants to build things the right way and is willing to help fixing day-to-day issues. We need Dieter's feedbacks as they are very valuable.</x-testimonials>

                    <x-testimonial author="Developer">Dieter share and explain what he has on his mind. During standups, backlog reviews, tech refinement, on Slack, etc... What he is saying is always efficient and pertinent/relevant, there is no superfluous, it's always straight to the point!</x-testimonials>

                    <x-testimonial author="SRE">It's very pleasant to work with you. You are always eager to improve the platform and very quick reaction when something needs to evolve. Your code reviews are accurate and provided the right way (with care and argumented). From what I've seen, very good leadership on the backend team, demonstrated in the sync's, where sometimes it can miss responsivity from the team, you are very good at animating it, pushing the team to progress.</x-testimonials>

                    <x-testimonial author="Backend developer">I'm not lying when I say that 90% of what I've learned in the last few months has been taught and shared by you. Learning, discovering, reviewing, QAing and talking with you has been a pleasure and an honour! Thanks to the developer, engineer, team leader and person you are, I have gained so much experience. People don't realise how many things, work, challenges, etc. you do and have on your plate - not counting the blockers. But through it all, you have always been there to help and support me. Believe me when I say that it was motivating to turn on the laptop in the morning knowing that you were there.</x-testimonial>

                    <x-testimonial author="SRE">From the moment I joined the team, your expertise and knowledge never ceased to amaze me. Your ability to navigate multiple complex issues simultaneously was not only impressive, but an inspiration to those around you. As a technical leader, your personality blended seamlessly with your role, creating an environment that was both productive and enjoyable for the team.</x-testimonial>
                </div>
            </div>
        </section>
    </article>
</x-layouts.app>
