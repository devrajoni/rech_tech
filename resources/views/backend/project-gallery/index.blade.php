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
        </div>
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Project Gallery</h4>
                    <a href="{{ route('backend.project-galleries.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-center">Project</th>
                                    <th class="text-center">Gallery</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                    <tr style="height: 100px; width: 100px;">
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $gallery->project->name ?? null }}</td>
                                        <td class="text-center">
                                            @foreach ($gallery->getMedia('gallery') as $image)
                                                <img src="{{ $image->getUrl() }}" alt="{{ $image->getUrl() }}"
                                                    style="height: 70px; width: 70px; border-radius: 100%;">
                                            @endforeach
                                        </td>
                                        <td class="d-flex text-end">
                                            <a href="{{ route('backend.project-galleries.edit', $gallery->id) }}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.project-galleries.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('delete')
                                                <button  class="btn btn-sm">
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

