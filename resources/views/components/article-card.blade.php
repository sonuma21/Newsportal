@props(["article"])
<a href="{{route('article', $article->id)}}" class="grid grid-cols-12 items-center gap-3 mb-3 rounded-lg hover:shadow-lg duration-200 border p-0">
        <div class="col-span-4">
            
            <img class="w-full h-[80px] object-cover rounded-lg" src="{{asset($article->image)}}" alt="{{$article->name}}">
        </div>
        <div class="col-span-8">
            <h1>{{$article->title}}</h1>
            <small>{{nepalidate($article->created_at)}}</small>
        </div>
    </a>
