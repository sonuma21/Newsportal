<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Company</h4>
                  <a href="{{route('admin.company.index')}}" class="btn btn-primary">Go to Home</a>
                </div>

                <div class="card-body">
                  <form action="{{route('admin.company.update', $company->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6 pt-3">
                            <label for="name">Enter the Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$company->name}}">
                            @error('name')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="address">Enter the Company Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" value="{{$company->address}}">
                            @error('address')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="phone">Enter the Company Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{$company->phone}}">
                            @error('phone')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="email">Enter the Company Email <span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$company->email}}">
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 pt-3">
                            <label for="facebook">Enter the Company Facebook </label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{$company->facebook}}">
                        </div>
                        <div class="col-6 pt-3">
                            <label for="youtube">Enter the Company Youtube</label>
                            <input type="text" name="youtube" id="youtube" class="form-control" value="{{$company->youtube}}">
                        </div>
                        <div class="col-6 pt-3">
                            <label for="instagram">Enter the Company Instagram</label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="{{$company->instagram}}">
                        </div>
                        <div class="col-6 pt-3">
                            <label for="logo">Enter the Company Logo <span class="text-danger">*</span></label>
                            <input type="file" name="logo" id="logo" class="form-control" value="{{old('logo')}}">
                            <img src="{{asset($company->logo)}}" alt="{{$company->name}}">
                            @error('logo')
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
