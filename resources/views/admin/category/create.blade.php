<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Category</h4>
                  <a href="{{route('admin.category.index')}}" class="btn btn-primary">Go to Home</a>
                </div>

                <div class="card-body">
                  <form action="{{route('admin.category.store',)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6 pt-3">
                            <label for="nep_title">Enter the Nepali Title<span class="text-danger">*</span></label>
                            <input type="text" name="nep_title" id="nep_title" class="form-control" value="{{old('nep_title')}}">
                            @error('nep_title')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="eng_title">Enter the English Title<span class="text-danger">*</span></label>
                            <input type="text" name="eng_title" id="eng_title" class="form-control" value="{{old('eng_title')}}">
                            @error('eng_title')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12 pt-3">
                            <label for="meta_keywords">Enter Meta Keywords </label>
                            <textarea type="text" name="meta_keywords" id="meta_keywords" class="form-control" >{{old('meta_keywords')}}
                            </textarea>
                            @error('meta_keywords')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 pt-3">
                            <label for="meta_description">Enter Meta Description </label>
                            <textarea type="text" name="meta_description" id="meta_description" class="form-control" >{{old('meta_description')}}
                            </textarea>
                            @error('meta_description')
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
