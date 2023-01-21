<header class="container max-w-screen-xl mx-auto px-4 sm:px-16 py-4">
    <nav class="flex justify-end">
        <ul class="flex space-x-4">
            <li>
                <a
                    href="/"
                    class="text-xl font-bold no-underline hover:text-[#3736C6]
                        {{ request()->routeIs('home') ? 'text-[#3736C6]':'' }}
                    "
                >
                    Home
                </a>
            </li>
            <li>
                <a
                    href="/uses"
                    class="text-xl font-bold no-underline hover:text-[#3736C6]
                        {{ request()->routeIs('uses') ? 'text-[#3736C6]':'' }}
                    "
                >
                    Uses
                </a>
            </li>
        </ul>
    </nav>
</header>
