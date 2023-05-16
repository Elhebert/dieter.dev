<header class="container max-w-screen-xl mx-auto px-4 sm:px-16 py-4">
    <nav class="flex justify-end">
        <ul class="flex space-x-6">
            <li>
                <a
                    tabindex="0"
                    href="/"
                    class="text-xl font-bold dark:hover:text-indigo-500 hover:text-[#3736C6] decoration-4
                        {{ request()->routeIs('home') ? 'dark:text-indigo-500 text-[#3736C6] underline':'no-underline hover:underline' }}
                    "
                >
                    Home
                </a>
            </li>
            <li>
                <a
                    href="/career"
                    class="text-xl font-bold dark:hover:text-indigo-500 hover:text-[#3736C6] decoration-4
                        {{ request()->routeIs('career') ? 'dark:text-indigo-500 text-[#3736C6] underline':'no-underline hover:underline' }}
                    "
                >
                    Career
                </a>
            </li>
            <li>
                <a
                    href="/uses"
                    class="text-xl font-bold dark:hover:text-indigo-500 hover:text-[#3736C6] decoration-4
                        {{ request()->routeIs('uses') ? 'dark:text-indigo-500 text-[#3736C6] underline':'no-underline hover:underline' }}
                    "
                >
                    Uses
                </a>
            </li>
        </ul>
    </nav>
</header>
