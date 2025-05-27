<x-frontend-layout>

    <section>
        <div class="container grid grid-cols-12">
            <div class="col-span-8">
                <div class="text-sm flex gap-5 py-3">
                    <div class="flex gap-1">
                        <i class="fas fa-id-card"></i>जवाफ डिजिटल पत्रिका
                    </div>
                    <div class="flex gap-1">
                        <i class="fas fa-eye"></i>{{$article->views}}
                    </div>
                </div>

                <h1 class="text-3xl mt-5 mb-3">
                    {{$article->title}}
                </h1>
                <img class="rounded-lg shadow-lg" src="{{asset($article->image)}}" alt="{{$article->name}}">

                <div class="mt-3 ">
                    {!! $article->content !!}
                </div>

                <div class="fb-comments" data-href="http://127.0.0.1:8000/article/{{$article->id}}" data-width="" data-numposts="5"></div>
            </div>
            <div class="col-span-4">
                @foreach ($advertises as $advertise)
                  <x-advertise-card :advertise="$advertise"/>
                @endforeach

            </div>
        </div>
    </section>
</x-frontend-layout>
