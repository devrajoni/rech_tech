<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Vendor') }}</label>
                    <div>
                        <select class="form-control" name="vendor_id" wire:model="vendor_id" id="vendor_id">
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Supplier') }}</label>
                    <div>
                        <select class="form-control" name="supplier_id" wire:model="supplier_id" id="supplier_id">
                        </select>
                    </div>
                </div>
            </div>
        </div>

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
                        <select class="form-control" name="sub_category_id" wire:model="sub_category_id" id="sub_category_id">
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
                group="col-md-4"
                :label="__('Name')"
                name="name"
                wire:model="name"
                id="name"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('Sku')"
                name="sku"
                wire:model="sku"
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
                wire:model="description"
                rows="3"
                required
            />
        </div>
        <div class="row">
            <x-ui.input
                group="col-md-4"
                :label="__('Buying Price')"
                name="buying_price"
                wire:model="buying_price"
                id="buying_price"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('Selling Price')"
                name="selling_price"
                wire:model="selling_price"
                id="selling_price"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('Discount')"
                name="discount"
                wire:model="discount"
                id="discount"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-4"
                :label="__('Price')"
                name="price"
                wire:model="price"
                id="price"
                required
            />

            <x-ui.input
                group="col-md-4"
                :label="__('In Stock')"
                name="in_stock"
                wire:model="in_stock"
                id="'in_stock"
                required
            />

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="label-control">{{ __('Status') }}</label>
                    <div>
                        <select class="form-control" name="status" wire:model="status" id="status">
                            <option value="1">{{ __('Active') }}</option>
                            <option value="2">{{ __('Inactive') }}</option>
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
