<x-frontend-layout>

    <section class="pb-16">
        <div class="container grid grid-cols-12">
            <div class="col-span-8">
                <div class="flex flex-wrap gap-4 md:gap-6 items-center text-sm text-gray-600 py-3">
                    <div class="flex items-center gap-2 bg-blue-50 px-3 py-1 rounded-md">
                        <i class="fas fa-id-card text-blue-600"></i>
                        <span>सेरोफेरो डिजिटल पत्रिका</span>
                    </div>
                    <div class="flex items-center gap-2 bg-blue-50 px-3 py-1 rounded-md">
                        <i class="fas fa-eye text-blue-600"></i>
                        <span>{{ $article->views }} Views</span>
                    </div>
                </div>

                <div class="shadow-lg rounded-lg py-6 px-4">
                    <div>
                        <img class="rounded-lg shadow-lg" src="{{ asset($article->image) }}" alt="{{ $article->name }}">

                    </div>
                    <div class="ml-4 mt-6">
                        <h1 class="text-3xl mt-5 mb-3">
                            {{ $article->title }}
                        </h1>

                        <div class="mt-3 text-slate-500 ">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>

                 <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
                    <div class="fb-comments" data-href="http://127.0.0.1:8000/article/{{ $article->id }}" data-width="100%" data-numposts="5"></div>
                </div>


            </div>
            <div class="col-span-4">
                @foreach ($advertises as $advertise)
                    <x-advertise-card :advertise="$advertise" />
                @endforeach

            </div>
        </div>
    </section>
</x-frontend-layout>
