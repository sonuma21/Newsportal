<x-frontend-layout>
    <section>
        <div class="container flex items-center gap-2">
            <div class="text-sm flex gap-1">
                BreakingNews<i class="fa-solid fa-bullhorn"></i>
            </div>
            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
                @foreach ($latest_articles as $article)
                    <a href=""><i class="fa-solid fa-bullhorn"></i> {{ $article->title }}</a>
                @endforeach
            </marquee>
        </div>
    </section>
    <section class="min-h-[500px] flex items-center bg-gray-50">
        <div class="container mx-auto grid md:grid-cols-12 gap-6 md:gap-10 py-6 px-4 md:px-0">
            <div class="md:col-span-8 flex flex-col">
                <img class="w-full h-[200px] sm:h-[400px] object-cover rounded-xl shadow-lg mt-5 animate-fade-in "
                    src="{{ asset($latest_article->image) }}" alt="{{ $latest_article->name }}">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mt-4 leading-tight line-clamp-3">
                    {{ $latest_article->title }}
                </h1>
                <div class="mt-6 text-gray-700">
                    {!! Str::limit($article->content, 200) !!}
                    <a href="{{ route('article', $article->id) }}"
                        class=" ml-4 text-[var(--primary)] font-semibold hover:text-blue-950 transition-colors duration-200">Read
                        More</a>
                </div>
            </div>
            <div class="md:col-span-4">
                <h1
                    class="text-2xl md:text-3xl font-semibold mb-5 bg-gradient-to-r from-[var(--lightprimary)] to-white py-3 px-4 border-l-4 border-[var(--primary)] mt-5 rounded-lg shadow-md text-[var(--primary)]">
                    ट्रेन्डिङ</h1>
                <div class="space-y-4">
                    @foreach ($trending_articles as $article)
                        <x-article-card :article="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container space-y-10">

            @foreach ($categories as $category)
                <div>
                    <h1
                        class="text-3xl mb-5 bg-gradient-to-r from-[var(--lightprimary)] to-white  py-2 px-3 border-l-4 border-[var(--primary)] mt-5 primary rounded-lg shadow-md">
                        {{ $category->nep_title }}
                    </h1>
                    <div class="grid md:grid-cols-4 gap-3 ">

                        @foreach ($category->articles as $article)
                            <x-article-card :article="$article" />
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </section>
</x-frontend-layout>
