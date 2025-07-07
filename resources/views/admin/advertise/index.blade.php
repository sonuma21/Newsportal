<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Advertise</h4>
                            <div>
                                <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">Add new ads</a>
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
                                            <th>Company Name</th>
                                            <th>Phone</th>
                                            <th>Ads_banner</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertises as $index => $advertise)
                                            <tr>
                                                <td>
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $advertise->company_name }}
                                                </td>
                                                <td>
                                                    {{ $advertise->phone }}
                                                </td>
                                                <td>
                                                    <img width="120" src="{{ asset($advertise->ads_banner) }}"
                                                        alt="{{ $advertise->company_name }}">
                                                </td>
                                                <td>
                                                    @if ($advertise->status == 'pending')
                                                        <span class="badge bg-warning text-white">
                                                            {{ $advertise->status }}
                                                        </span>
                                                    @elseif ($advertise->status == 'approved')
                                                        <span class="badge bg-success text-white">
                                                            {{ $advertise->status }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger text-white">
                                                            {{ $advertise->status }}
                                                        </span>
                                                    @endif
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('admin.advertise.edit', $advertise->id) }}"
                                                            class="btn btn-primary btn-sm mr-2 text-center"
                                                            style="width: 80px;">Edit</a>
                                                        <form
                                                            action="{{ route('admin.advertise.destroy', $advertise->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this advertise?');">
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
