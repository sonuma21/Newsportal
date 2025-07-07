<x-frontend-layout>
    <section>
        <div class="container flex items-center gap-2">
            <div class="text-sm flex gap-1">
                BreakingNews<i class="fa-solid fa-bullhorn"></i>
            </div>
            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
                @foreach ($articles as $article)
                    <a href=""><i class="fa-solid fa-bullhorn"></i> {{ $article->title }}</a>
                @endforeach
            </marquee>
        </div>
    </section>
    <section>
        <div class="container grid  md:grid-cols-12 gap-2 md:gap-4 ">
            <div class="md:col-span-8">
                @foreach ($articles as $article)
                    <a href="{{ route('article', $article->id) }}"
                        class="group bg-white border  border-gray-200 p-4 mb-6 rounded-lg grid grid-cols-12 gap-4 hover:shadow-xl  transition-shadow duration-300">
                        <div class="col-span-12 md:col-span-5">
                            <img class="rounded-lg w-full h-[200px] object-cover"
                                src="{{ asset($article->image ?? 'images/placeholder.jpg') }}"
                                alt="{{ $article->title }}">
                        </div>
                        <div class="col-span-12 md:col-span-7 flex flex-col justify-between">
                            <div>
                                <h1
                                    class="text-2xl  group-hover:text-[var(--primary)] font-bold text-gray-800  transition-colors duration-200">
                                    {{ $article->title }}</h1>
                                <div class="text-gray-600 mt-2">
                                    {!! Str::limit(strip_tags($article->content), 150) !!}
                                </div>
                            </div>
                            <div class="mt-4 text-sm text-gray-500 flex justify-between items-center">
                                <span>{{ $article->created_at->format('M d, Y') }}</span>
                                <span>{{ $article->views }} {{ Str::plural('View', $article->views) }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="mt-6">
                    {{ $articles->links() }}
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
</x-frontend-layout>
