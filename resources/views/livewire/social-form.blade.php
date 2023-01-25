<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Icon')"
                wire:model.defer="icon"
                name="icon"
                id="icon"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Url')"
                wire:model.defer="url"
                name="url"
                id="url"
                required
            />
        </div>

        <div class="row">
            <div class="col-12 mt-3">
                <button type="submit" class="button button-primary button-outline button-sm">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>
    <div class="col-12 mb-30">
        <div class="box-body">
            <div class="table-responsive mt-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-start border-0">{{ __('Icon') }}</th>
                            <th class="text-center border-0">{{ __('Url') }}</th>
                            <th class="text-end border-0">{{ __('Action') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($socials as $social)
                            <tr>
                                <td class="text-start">{{ $social->icon }}</td>
                                <td class="text-center">{{ $social->url }}</td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end align-items-center gap-3">
                                        <button type="button" class="btn btn-sm" wire:click="edit({{ $social->id }})">
                                            <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm" wire:click="delete({{ $social->id }})">
                                            <i class="ph-trash-bold text-danger fs-3"></i>
                                        </button>
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
