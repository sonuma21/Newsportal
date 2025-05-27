<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Company</h4>
                  <div>
                    @if (!$company)
                    <a href="{{route('admin.company.create')}}" class="btn btn-primary">Add</a>
                    @endif
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
                          <th>Logo</th>
                          <th>Company Name</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     @if ($company)
                     <tr>
                        <td>
                          1
                        </td>
                        <td>
                          <img width="120" src="{{asset($company->logo)}}" alt="{{$company->name}}">
                        </td>
                       <td>
                          {{$company->name}}
                       </td>
                       <td>
                          {{$company->address}}
                       </td>
                       <td>
                          {{$company->email}}
                       </td>
                       <td>
                          {{$company->phone}}
                       </td>
                       <td><a href="{{route('admin.company.edit',$company->id)}}"
                        class="btn btn-primary btn-sm w-100">Edit</a>
                        <a href="{{route('admin.company.destroy',$company->id)}}"
                            class="btn btn-danger btn-sm mt-2 w-100">Remove</a>
                    </td>

                      </tr>
                     @endif


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</x-app-layout>
