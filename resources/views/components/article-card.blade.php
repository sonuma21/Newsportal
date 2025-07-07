@props(["article"])
<a href="{{route('article', $article->id)}}" class="grid grid-cols-12 items-center gap-4 mb-4 rounded-xl hover:shadow-xl hover:bg-gray-50 transition-all duration-300 border border-gray-200 p-3 animate-slide-in">
    <div class="col-span-4">
        <img class="w-full h-[100px] object-cover rounded-lg shadow-sm" src="{{asset($article->image)}}" alt="{{$article->name}}">
    </div>
    <div class="col-span-8">
        <h1 class="text-lg font-semibold text-gray-800 line-clamp-2 hover:text-[var(--primary)] transition-colors duration-200">{{$article->title}}</h1>
        <small class="text-sm text-gray-500">{{nepalidate($article->created_at)}}</small>
    </div>
</a>
