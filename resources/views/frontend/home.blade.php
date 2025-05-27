<x-frontend-layout>
<section>
    <div class="container flex items-center gap-2">
        <div class="text-sm flex gap-1" >
            BreakingNews<i class="fa-solid fa-bullhorn"></i>
        </div>
        <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
           @foreach ($latest_articles as $article)
           <a href=""><i class="fa-solid fa-bullhorn"></i> {{$article->title}}</a>
           @endforeach
         </marquee>
    </div>
</section>
<section>
    <div class="container grid md:grid-cols-12 gap-10 py-2">
        <div class="md:col-span-8">
            <img class="mt-5" src="{{asset($latest_article->image)}}" alt="image">
            <h1 class="text-xl">
                {{$latest_article->title}}
            </h1>
        </div>
        <div class="md:col-span-4">
            <h1 class="text-3xl mb-5 bg-light-primary py-2 px-3 border-l-4 border-[var(--primary)] mt-5 primary rounded-lg shadow-md">ट्रेन्डिङ</h1>
            @foreach ($trending_articles as $article)
                <x-article-card :article="$article"/>
            @endforeach
        </div>

    </div>
</section>
<section>
    <div class="container space-y-10">

        @foreach ($categories as $category)
        <div>
        <h1
        class="text-3xl mb-5 bg-light-primary py-2 px-3 border-l-4 border-[var(--primary)] mt-5 primary rounded-lg shadow-md">
        {{$category->nep_title}}
        </h1>
        <div class="grid md:grid-cols-4 gap-3">

        @foreach ($category->articles as $article)
            <x-article-card :article="$article"/>
        @endforeach
        </div>
        </div>

        @endforeach

    </div>
</section>
</x-frontend-layout>
