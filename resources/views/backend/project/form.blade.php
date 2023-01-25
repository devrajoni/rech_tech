
<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Project<span>/ eCommerce</span></h3>
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
                        <h3 class="title"></h3>
                        <a href="{{ route('backend.projects.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('backend.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Category') }}</label>
                                        <div>
                                            <select class="form-control" name="category_id" id="category_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Title')"
                                    name="title"
                                    id="title"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Image')"
                                    type="file"
                                    name="image"
                                    id="image"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Description')"
                                    type="textarea"
                                    name="description"
                                    id="description"
                                    rows="5"
                                    cols="5"
                                    required
                                />
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Status') }}</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
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
    <x-layouts.backend.script>
        <script>
            $(document).ready(function(){
                $('#description').summernote({

                });

                $('#status').val("{{$category->status ?? ''}}");
            });
        </script>
    </x-layouts.backend.script>
</x-layouts.backend>
