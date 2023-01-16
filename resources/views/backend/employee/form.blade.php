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
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($employee) ? __('Update employee') : __('Add Employee') }}</h3>
                        <a href="{{ route('backend.employees.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($employee) ? route('backend.employees.update', $employee->id) : route('backend.employees.store') }}" method="POST">
                            @csrf
                            @isset($employee) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('First Name')"
                                    name="first_name"
                                    id="first_name"
                                    :value="$employee->first_name ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Last Name')"
                                    name="last_name"
                                    id="last_name"
                                    :value="$employee->last_name ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Provider Id')"
                                    name="provider_id"
                                    id="provider_id"
                                    :value="$employee->provider_id ?? null "
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-4"
                                    type="email"
                                    :label="__('Email')"
                                    name="email"
                                    id="email"
                                    :value="$employee->email ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Phone')"
                                    name="phone"
                                    id="phone"
                                    :value="$employee->phone ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Password')"
                                    type="password"
                                    name="password"
                                    id="password"
                                    required
                            />
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Gender') }}</label>
                                        <div>
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="Male">{{ __('Male') }}</option>
                                                <option value="Female">{{ __('Female') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Role') }}</label>
                                        <div>
                                            <select class="form-control" name="role_id" id="role_id">
                                                <option value="customer">{{ __('Customer') }}</option>
                                                <option value="admin">{{ __('Admin') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-15">
                                    <button type="submit" class="button button-primary button-outline button-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>
<x-layouts.backend.script>
    <script>
        $(document).ready(function(){
        $('#role_id').val("{{$employee->role_id ?? 'customer'}}");
        $('#gender').val("{{$employee->gender ?? ''}}");
        });
    </script>
</x-layouts.backend.script>
