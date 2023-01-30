
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
                        <form action="{{ isset($project) ? route('backend.projects.update', $project->id) :  route('backend.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($project) @method('PUT') @endisset
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Category') }}</label>
                                        <div>
                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Title')"
                                    name="title"
                                    id="title"
                                    :value="$project->title ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$project->name ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Image')"
                                    type="file"
                                    class="file-pond"
                                    name="image"
                                    id="dropify"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Description')"
                                    type="textarea"
                                    name="description"
                                    class="description"
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
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.active.js"></script>
        <script>
            $(document).ready(function(){
                $('#dropify').dropify();
                $('#status').val("{{$project->status ?? ''}}");
            });
            FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
                const inputElement = document.querySelector('.file-pond');
                const pond = FilePond.create( inputElement, {
                    imagePreviewHeight: 140,
            });

        </script>
    </x-layouts.backend.script>
</x-layouts.backend>
