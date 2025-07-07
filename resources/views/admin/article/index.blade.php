<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Article</h4>
                            <div>

                                <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Add New Article</a>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                SN
                                            </th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $index => $article)
                                            <tr>
                                                <td>
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $article->title }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($article->image) }}" width="120"
                                                        alt="{{ $article->name }}">
                                                </td>
                                                <td>
                                                    {{ $article->views }}
                                                </td>
                                                <td>
                                                    @if ($article->status == 'pending')
                                                        <span class="badge bg-warning text-white">
                                                            {{ $article->status }}
                                                        </span>
                                                    @elseif ($article->status == 'approved')
                                                        <span class="badge bg-success text-white">
                                                            {{ $article->status }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger text-white">
                                                            {{ $article->status }}
                                                        </span>
                                                    @endif

                                                </td>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('admin.article.edit', $article->id) }}"
                                                            class="btn btn-primary btn-sm mr-2 text-center"
                                                            style="width: 80px;">Edit</a>
                                                        <form
                                                            action="{{ route('admin.article.destroy', $article->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this article?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm text-center"
                                                                style="width: 80px;">Remove</button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
