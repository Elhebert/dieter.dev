<x-layouts.app>
    <article>
        <section class="mt-16 leading-loose max-w-none">
            <h2 class="text-center text-3xl ml-[-.1rem] font-bold">Trusted by at least <span class="text-[#ECC127]">5</span> differents companies</h2>

            <div
                class="mt-8 w-full py-12 px-3 flex flex-col justify-center items-center"
            >
                <ul
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 justify-items-center items-center w-4/5"
                >
                    <li>
                        <a
                            class="h-10 flex items-center"
                            href="https://escaux.be"
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
                        <a href="https://miysis.be" title="Miysis"
                            ><x-svg.miysis class="text-black w-32"
                        /></a>
                    </li>

                    <li>
                        <a href="https://altavia-act.com" title="Altavia ACT*"
                            ><x-svg.altavia-act class="w-36"
                        /></a>
                    </li>

                    <li>
                        <a href="https://trivago.com" title="trivago"
                            ><x-svg.trivago class="w-36"
                        /></a>
                    </li>

                    <li>
                        <a href="https://strapi.io" title="Strapi"
                            ><x-svg.strapi class="w-36"
                        /></a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="mt-16 prose leading-loose max-w-none">
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
                I worked for 2 years for (hotel?) trivago. I was involved in the development of a marketplace platform where independent hoteliers would be able to buy and use tools/apps to manage their properties on trivago: <a class="no-underline hover:underline font-bold text-[#3736C6]" href="https://studio.trivago.com">trivago Business Studio</a>. Most of my days were spent on maintaining the code base, refactor aging APIs and work on the payment and subscription manager.
            </p>


            <p>
                And finally I joined Strapi as a Senior Backend Engineer. Soon after I started to work as a Lead Backend Engineer on <a class="no-underline hover:underline font-bold text-[#3736C6]" href="https://studio.trivago.com">Strapi Cloud</a>. Together with the CTO we build the architecture and put the foundation of the code base that is running Strapi Cloud. My day-to-day consists of mentoring other engineers, being a bridge between our engineering and product teams and to be a steward for the codebase.
            </p>
        </section>

        <section class="mt-16 leading-loose max-w-none">
            <div class="text-center ml-[-.1rem] text-[#ECC127] font-bold">Some things are more important than others</div>
            <h2 class="text-center text-3xl font-bold mb-8">Values</h2>

            <dl class="gap-8 gap-x-16 grid grid-cols-1 lg:grid-cols-2 justify-between">
                <x-value name="Privacy-focus">I value my own privacy online. I believe that we need to also take care of our users' privacy first.</x-value>
                <x-value name="Clean code">Above complexity and fancy design pattern I value clean and readable code.</x-value>
                <x-value name="User first">When designing a feature or thinking about architecural improvement I always take care of not degrading the user's experience.</x-value>
                <x-value name="Work life balance">Work doesn't exist outside of working hours. I don't think my company is like a family. And my family and health will always come first.</x-value>
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

                    <x-testimonial author="Developer">It's nice to have weekly meetings with Dieter where we talk about the Cloud at 360 degrees and align on topics. He is also handling very well the technical leadership of the team</x-testimonials>

                    <x-testimonial author="Project manager">Dieter has strong technical abilities. He's able to think about many aspects of a problem, and quickly identifies consequences of possible solutions. He wants to build things the right way and is willing to help fixing day-to-day issues. We need Dieter's feedbacks as they are very valuable.</x-testimonials>

                    <x-testimonial author="Developer">Dieter share and explain what he has on his mind. During standups, backlog reviews, tech refinement, on Slack, etc... What he is saying is always efficient and pertinent/relevant, there is no superfluous, it's always straight to the point!</x-testimonials>
                </div>
            </div>
        </section>
    </article>
</x-layouts.app>
