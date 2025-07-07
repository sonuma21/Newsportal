<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100 font-sans">
        <div>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Welcome to Your Dashboard</h2>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-lg font-medium text-gray-600">Total Articles</h3>
                        <p class="text-2xl font-bold text-gray-800">{{ $articles->count() }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-lg font-medium text-gray-600">Total Views</h3>
                        <p class="text-2xl font-bold text-gray-800">{{ $articles->sum('views') }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-lg font-medium text-gray-600">Pending Articles</h3>
                        <p class="text-2xl font-bold text-gray-800">{{ $articles->where('status', 'pending')->count() }}
                        </p>
                    </div>
                </div>

                <!-- Recent Articles -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Articles</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-gray-800">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-2 px-4 text-gray-600">Title</th>
                                    <th class="py-2 px-4 text-gray-600">Status</th>
                                    <th class="py-2 px-4 text-gray-600">Views</th>
                                    <th class="py-2 px-4 text-gray-600">Created At</th>
                                    <th class="py-2 px-4 text-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles->take(5) as $article)
                                    <tr class="border-b hover:bg-gray-50 transition-colors">
                                        <td class="py-3 px-4">{{ Str::limit($article->title, 30) }}</td>
                                        <td class="py-3 px-4">
                                            <span
                                                class="inline-block px-2 py-1 text-sm rounded-full {{ $article->status === 'approved' ? 'bg-green-100 text-green-800' : ($article->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                                {{ ucfirst($article->status) }}
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">{{ $article->views }}</td>
                                        <td class="py-3 px-4">{{ $article->created_at->format('M d, Y') }}</td>
                                        <td class="py-3 px-4">
                                            <a href="{{route('admin.article.edit', $article->id)}}"
                                                class="text-blue-600 hover:underline">Edit</a>
                                            <a href="{{ route('article', $article->id) }}"
                                                class="ml-4 text-blue-600 hover:underline">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="{{route('admin.article.index')}}" class="text-blue-600 hover:underline">View All
                            Articles</a>
                    </div>
                </div>
            </main>
        </div>
    </body>

    </html>

</x-app-layout>
