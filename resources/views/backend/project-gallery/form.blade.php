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
                        <h3 class="title">{{ isset($projectGallery) ? __('Update Gallery') : __('Add Gallery') }}</h3>
                        <a href="{{ route('backend.project-galleries.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($projectGallery) ? route('backend.project-galleries.update', $projectGallery->id) : route('backend.project-galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($projectGallery) @method('PUT') @endisset
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Project') }}</label>
                                        <div>
                                            <select class="form-control" name="project_id" id="project_id">
                                                @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <x-ui.input
                                    group="col-lg-12"
                                    :label="__('Gallery')"
                                    type="file"
                                    name="gallery[]"
                                    class="dropify"
                                    multiple
                                    required
                                />
                            </div>
                            <div class="row">
                                @isset($projectGallery)
                                    <div class="col-lg-12">
                                        @foreach ($projectGallery->getMedia('gallery') as $image)
                                         <img src="{{ $image->getUrl() }}" alt="{{ $image->getUrl() }}" style="height: 90px; width:300px; padding:2px;">
                                        @endforeach
                                    </div>
                                @endisset
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
                $('.dropify').dropify();
            });


        </script>
    </x-layouts.backend.script>
</x-layouts.backend>