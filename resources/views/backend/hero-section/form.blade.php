<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Slider<span>/ eCommerce</span></h3>
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
                        <a href="{{ route('backend.hero-sections.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{isset($heroSection) ?  route('backend.hero-sections.update', $heroSection->id) :  route('backend.hero-sections.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($heroSection) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-lg-12"
                                    :label="__('Image')"
                                    type="file"
                                    class="file-pond"
                                    id="dropify"
                                    name="image"
                                    required
                                />
                            </div>
                            <div class="row">
                                @isset($heroSection)
                                    <div class="col-lg-12">
                                        @foreach ($heroSection->getMedia('slider') as $image)
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
                $('#dropify').dropify();
                $('#status').val("{{$projectCategory->status ?? ''}}");
            });
            FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
                const inputElement = document.querySelector('.file-pond');
                const pond = FilePond.create( inputElement, {
                    imagePreviewHeight: 140,
            });

        </script>
    </x-layouts.backend.script>
</x-layouts.backend>