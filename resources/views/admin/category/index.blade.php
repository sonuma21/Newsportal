<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Company</h4>
                  <div>

                    <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add New</a>

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
                    @foreach ($categories as $index=>$category)

                     <tr>
                        <td>
                          {{ ++$index }}
                        </td>
                       <td>
                          {{$category->nep_title}}
                       </td>
                       <td>
                          {{$category->eng_title}}
                       </td>

                        <td class="text-center">
                            <div class="d-flex flex-column align-items-center" style="width-75%, margin:auto">
                                <a href="{{route('admin.category.edit',$category->id)}}"
                                    class="btn btn-primary btn-sm w-100">Edit</a>
                                    <a href="{{route('admin.category.destroy',$category->id)}}"
                                        class="btn btn-danger btn-sm mt-2 w-100">Remove</a>
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
