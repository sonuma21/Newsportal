<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Article Edit</h4>
                  <a href="{{route('admin.article.index')}}" class="btn btn-primary">Go to Home</a>
                </div>

                <div class="card-body">
                  <form action="{{route('admin.article.update', $article->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6 pt-3">
                            <label for="title">Select the categories<span class="text-danger">*</span></label>
                            <select name="categories[]" id="categories" class="form-control select2" multiple>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    {{$article->categories->contains($category->id) ? 'selected' : ''}}>
                                    {{$category->eng_title}}</option>
                                @endforeach
                            </select>
                            @error('categories')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="title">Enter the Article Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $article->title}}">
                            @error('title')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 pt-3">
                            <label for="content">Enter the Content<span class="text-danger">*</span></label>
                            <textarea type="text" name="content" id="content" class="form-control summernote">{{old('content') ?? $article->content}}</textarea>
                            @error('content')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12 pt-3">
                            <label for="meta_keywords">Enter Meta Keywords </label>
                            <textarea type="text" name="meta_keywords" id="meta_keywords" class="form-control" >{{old('meta_keywords') ?? $article->meta_keywords}}
                            </textarea>
                            @error('meta_keywords')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 pt-3">
                            <label for="meta_description">Enter Meta Description </label>
                            <textarea type="text" name="meta_description" id="meta_description" class="form-control" >{{old('meta_description') ?? $article->meta_description }}
                            </textarea>
                            @error('meta_description')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="status">Select of Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending" {{$article->status == 'pending' ? 'selected' : ''}}>Pending</option>
                                <option value="approved" {{$article->status == 'approved' ? 'selected' : ''}}>approved</option>
                                <option value="rejected" {{$article->status == 'rejected' ? 'selected' : ''}}>rejected</option>
                            </select>

                            @error('status')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="image">Upload Image </label>
                            <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}">
                            @error('image')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 pt-3">
                          <button type="submit" class="btn btn-success">Save Record</button>
                        </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
</x-app-layout>
