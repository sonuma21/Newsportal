<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Categories</h4>
                            <div>

                                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add New</a>

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
                                            <th>Nepali Title</th>
                                            <th>English Title</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td>
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $category->nep_title }}
                                                </td>
                                                <td>
                                                    {{ $category->eng_title }}
                                                </td>

                                                   <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                                            class="btn btn-primary btn-sm mr-2 text-center"
                                                            style="width: 80px;">Edit</a>
                                                        <form
                                                            action="{{ route('admin.category.destroy', $category->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this category?');">
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
