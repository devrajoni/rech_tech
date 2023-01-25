<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Product <span>/ eCommerce</span></h3>
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
                    <h4 class="title">Product Table</h4>
                    <a href="{{ route('backend.products.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-start border-0">{{ __('SL') }}</th>
                                    <th class="text-center border-0">{{ __('Category') }}</th>
                                    <th class="text-center border-0">{{ __('Name') }}</th>
                                    <th class="text-center border-0">{{ __('SKU') }}</th>
                                    <th class="text-center border-0">{{ __('Buying Price') }}</th>
                                    <th class="text-center border-0">{{ __('Selling Price') }}</th>
                                    <th class="text-center border-0">{{ __('Discount') }}</th>
                                    <th class="text-center border-0">{{ __('Price') }}</th>
                                    <th class="text-center border-0">{{ __('Stock') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $product->category->name ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $product->name }}</td>
                                        <td class="text-center">{{ $product->sku }}</td>
                                        <td class="text-center">{{ $product->buying_price }}</td>
                                        <td class="text-center">{{ $product->selling_price }}</td>
                                        <td class="text-center">{{ $product->discount }}</td>
                                        <td class="text-center">{{ $product->price }}</td>
                                        <td class="text-center">{{ $product->in_stock }}</td>
                                        <td class="text-center">{{ $product->status }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('backend.products.edit', $product->id )}}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.products.destroy', $product->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
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