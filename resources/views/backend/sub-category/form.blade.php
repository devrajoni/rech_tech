<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Sub Category<span>/ eCommerce</span></h3>
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
                        <h3 class="title">{{ isset($subCategory) ? __('Update Sub Category') : __('Add Sub Category') }}</h3>
                        <a href="{{ route('backend.subCategories.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($subCategory) ? route('backend.subCategories.update', $subCategory->id) :  route('backend.subCategories.store') }}" method="POST">
                            @csrf
                            @isset($subCategory) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$subCategory->name ?? null"
                                    required
                                />

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Status') }}</label>
                                        <div>
                                            <select class="form-control" name="status" id="status">
                                                <option value="Active">{{ __('Active') }}</option>
                                                <option value="Inactive">{{ __('Inactive') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('subCategory') }}</label>
                                        <div>
                                            <select class="form-control" name="parent_id" id="parent_id">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
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

        $('#status').val("{{$subsubCategory->status ?? ''}}");
        $('#status').val("{{$subsubCategory->parent_id ?? ''}}");
        });
    </script>
</x-layouts.backend.script>