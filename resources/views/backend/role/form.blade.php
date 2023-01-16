<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Role & Permission <span>/ eCommerce</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <input type="text" class="form-control input-date-predefined">
                </div>
            </div>
            <div class="col-12 mb-20">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Add Role & Permission</h3>
                        <div class="card-options card-header-styles switch pe-3">
                            <div class="switch_section my-0">
                                <div class="switch-toggle d-flex float-end mt-2 me-5">
                                    <a class="onoffswitch2">
                                        <input type="checkbox"  id="rolecheckall" class=" toggle-class onoffswitch2-checkbox"  >
                                        <label for="rolecheckall" class="toggle-class onoffswitch2-label" ></label>
                                    </a>
                                    <label class="form-label mb-5">Select All</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('backend.roles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Role')"
                                    name="name"
                                    id="name"
                                    required
                                />
                                <div class="col-12 mt-3 d-flex float-end"><button class="button button-primary button-outline button-sm">Submit</button></div>
                            </div>
                        </div>
                    </form>

                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Permission</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-12 col-md-12 mt-5">
                            <div class="form-group">
                                <div class="row">
                                    @foreach($permissions as $key => $permission)
                                        <div class="col-xl-3">
                                            <div class="switch_section">
                                                <div class="switch-toggle d-flex">
                                                    <a class="onoffswitch2">
                                                        <input type="checkbox" name="permission[]" id="myonoffswitch {{ $permission->id }}" class=" toggle-class onoffswitch2-checkbox rolecheck" Value="{{ $permission->id }}" >
                                                        <label for="myonoffswitch {{ $permission->id }}" class="toggle-class onoffswitch2-label" ></label>
                                                    </a>
                                                    <label class="form-label ps-3">{{ $permission->name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 d-flex justify-content-end">
                            <button class="button button-primary button-outline button-sm mr-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>
