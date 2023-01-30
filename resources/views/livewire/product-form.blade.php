<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Category') }}</label>
                    <div>
                        <select class="form-control" name="category_id" wire:model="category_id" id="category_id">
                            <option value="">---</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Sub Category') }}</label>
                    <div>
                        <select class="form-control" name="sub_category_id" wire:model.defer="sub_category_id" id="sub_category_id">
                            <option value="">---</option>

                            @foreach($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Title')"
                name="title"
                wire:model.defer="title"
                id="title"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Image')"
                type="file"
                name="image"
                wire:model.defer="image"
                class="file-pond"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Name')"
                name="name"
                wire:model.defer="name"
                id="name"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('SKU')"
                name="sku"
                wire:model.defer="sku"
                id="sku"
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
                wire:model.defer="description"
                rows="3"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-4"
                :label="__('Buying Price')"
                name="buying_price"
                wire:model.defer="buying_price"
                id="buying_price"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('Selling Price')"
                name="selling_price"
                wire:model.defer="selling_price"
                id="selling_price"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('Discount')"
                name="discount"
                wire:model.defer="discount"
                id="discount"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('In Stock')"
                name="in_stock"
                wire:model.defer="in_stock"
                id="'in_stock"
                required
            />

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Status') }}</label>
                    <div>
                        <select class="form-control" name="status" wire:model.defer="status" id="status">
                            <option value="Active">{{ __('Active') }}</option>
                            <option value="Inactive">{{ __('Inactive') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3 d-flex">
            <button type="submit" class="button button-primary button-outline button-sm mr-3">Submit</button>
            <a href="{{ route('backend.products.index') }}"  class="button button-primary button-outline button-sm mr-3">Back</a>
        </div>
    </form>
</div>
