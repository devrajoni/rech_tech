<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Employee <span>/ eCommerce</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <input type="text" class="form-control input-date-predefined">
                </div>
            </div>
        </div>
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Employee Table</h4>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Provider Id</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $employee->first_name. ' '.$employee->last_name }}</td>
                                    <td>{{ $employee->provider_id }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->role_id }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('backend.employees.edit', $employee->id)}}" class="btn btn-sm">
                                            <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                        </a>
                                        <form action="{{ route('backend.employees.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-sm">
                                                <i class="ph-trash-bold text-danger fs-3"></i>
                                            </button>
                                        </form>
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
</x-layouts.backend>
