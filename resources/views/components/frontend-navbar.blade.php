<section class="bg-gray-100">
    <div class="container mx-auto flex justify-between items-center py-4 px-4">
        <div class="text-[var(--primary)] font-bold text-xl">
            <a href="{{route('home')}} " class="hover:text-[var(--proactive)] transition-colors duration-200">सेरोफेरो News</a>

        </div>
        <div>
            <p class="text-lg text-gray-700 animate-fade-in">{{ nepalidate(now()) }}</p>
        </div>
    </div>
</section>
<nav class="bg-primary text-white py-2">
    <div class="container mx-auto px-4">
        <div class="hidden lg:flex items-center justify-between">
            <ul class="flex gap-8 text-xl">
                <li>
                    <a href="{{ route('home') }}"
                        class="hover:text-[var(--active)] transition-colors duration-300 ease-in-out hover:scale-105 transform inline-block">गृह
                        पृष्ठ</a>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('category', $category->slug) }}"
                            class="hover:text-[var(--active)] transition-colors duration-300 ease-in-out hover:scale-105 transform inline-block">{{ $category->nep_title }}</a>
                    </li>
                @endforeach
            </ul>
            <div>
                <form action="{{ route('compare') }}" method="get" class="relative flex items-center">
                    <input
                        class="w-[300px] border text-black placeholder-gray-500 px-4 py-2 pr-12 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-300"
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


