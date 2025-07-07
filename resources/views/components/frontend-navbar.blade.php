<section class="bg-gray-100">
    <div class="container mx-auto flex justify-between items-center py-4 px-4">
        <div class="text-[var(--primary)] font-bold text-sm sm:text-xl">
            <a href="{{ route('home') }}" class="hover:text-[var(--proactive)] transition-colors duration-200">सेरोफेरो
                News</a>
        </div>
        <div>
            <p class="text-sm sm:text-lg text-gray-700 animate-fade-in">{{ nepalidate(now()) }}</p>
        </div>
    </div>
</section>
<nav class="bg-primary text-white py-2">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="lg:hidden relative w-10 h-10 focus:outline-none">
                <i id="menu-open-icon" class="fas fa-bars text-xl"></i>
            </button>

            <!-- Navigation menu (categories at start) -->
            <div id="mobile-menu"
                class="hidden lg:flex lg:items-center lg:w-auto absolute lg:static top-0 left-0 bg-primary w-full z-50">
                <!-- Close icon for mobile menu -->
                <i id="menu-close-icon" class="fas fa-xmark text-xl absolute top-4 right-4 lg:hidden"></i>
                <ul class="flex flex-col lg:flex-row lg:gap-8 text-xl mt-12 lg:mt-0 px-4 lg:px-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 lg:py-0 hover:text-[var(--active)] transition-colors duration-300 ease-in-out hover:scale-105 transform">गृह
                            पृष्ठ</a>
                    </li>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category', $category->slug) }}"
                                class="block py-2 lg:py-0 hover:text-[var(--active)] transition-colors duration-300 ease-in-out hover:scale-105 transform">{{ $category->nep_title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Search form (at end in desktop view) -->
            <div class="lg:flex lg:ml-auto">
                <form action="{{ route('compare') }}" method="get" class="relative flex items-center">
                    <input
                        class="w-full lg:w-[300px] border text-black placeholder-gray-500 px-4 py-2 pr-12 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-300"
                        type="text" name="q" id="search-input" placeholder="search..." autocomplete="off">
                    <button
                        class="absolute right-3 top-1/2 -translate-y-1/2 font-bold p-2 rounded-full cursor-pointer text-[var(--primary)] hover:text-green-500 transition-all duration-300"
                        type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const isOpen = !mobileMenu.classList.contains('hidden');
        openIcon.classList.toggle('hidden', isOpen);
    });

    closeIcon.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        openIcon.classList.remove('hidden');
    });
</script>
