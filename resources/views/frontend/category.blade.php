<x-frontend-layout>
    <section>
        <div class="container flex items-center gap-2">
            <div class="text-sm flex gap-1" >
                BreakingNews<i class="fa-solid fa-bullhorn"></i>
            </div>
            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
               @foreach ($articles as $article)
               <a href=""><i class="fa-solid fa-bullhorn"></i> {{$article->title}}</a>
               @endforeach
             </marquee>
        </div>
    </section>
    <section>
        <div class="container grid  md:grid-cols-12 ">
            <div class="md:col-span-8 p-4 rounded-lg">
               @foreach ($articles as $article)

                    <a href="" class="border p-1 mb-4 rounded-lg grid grid-cols-12 space-y-4 hover:shadow-lg">
                        <div class="col-span-8">
                            <img class="rounded-lg w-full h-[280px]" src="{{asset($article->image)}}" alt="{{$article->name}}">
                        </div>
                        <div class="md:col-span-4 ml-5 text-xl text-black">
                            <h1>{{$article->title}}</h1>

                        </div>


            </a>
               @endforeach
                {{$articles->links()}}
            </div>
            <div class="col-span-4 rounded-lg"></div>
        </div>
    </section>
</x-frontend-layout>
