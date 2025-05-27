<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Advertise Create</h4>
                  <a href="{{route('admin.advertise.index')}}" class="btn btn-primary">Go to Advertise</a>
                </div>

                <div class="card-body">
                  <form action="{{route('admin.advertise.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6 pt-3">
                            <label for="company_name">Enter the Advertise Name <span class="text-danger">*</span></label>
                            <input type="text" name="company_name" id="company_name" class="form-control" value="{{old('company_name')}}">
                            @error('company_name')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="phone">Enter the Contact Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                            @error('phone')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="link">Enter the Company link <span class="text-danger">*</span> </label>
                            <input type="text" name="link" id="link" class="form-control" value="{{old('link')}}">
                            @error('link')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="ads_banner">Drop the Ads Banner <span class="text-danger">*</span></label>
                            <input type="file" name="ads_banner" id="ads_banner" class="form-control" value="{{old('ads_banner')}}">
                            @error('ads_banner')
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
