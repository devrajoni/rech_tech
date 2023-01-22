<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\Backend\ProductFormRequest;

class ProductForm extends Component
{
    public $product_id;

    public $category_id;
    public $sub_category_id;

    public $vendor_id;

    public $supplier_id;

    public $name;

    public $sku;

    public $description;

    public $buying_price;

    public $selling_price;

    public $discount;

    public $price;

    public $in_stock;

    public $status;

    public function submit()
    {
        $this->validate([
            'vendor_id' => [
                'nullable',
            ],
            'supplier_id' => [
                'nullable',
            ],
            'category_id' => [
                'nullable',
            ],
            'sub_category_id' => [
                'nullable',
            ],
            'name' => [
                'required',
            ],
            'sku' => [
                'nullable',
            ],
            'description' => [
                'nullable',
            ],
            'buying_price' => [
                'required',
            ],
            'selling_price' => [
                'required',
            ],
            'discount' => [
                'nullable',
            ],
            'price' => [
                'required',
            ],
            'in_stock' => [
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ]);
        Product::create([
            'vendor_id' => $this->vendor_id,
            'supplier_id' => $this->supplier_id,
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'name' => $this->name,
            'sku' => $this->sku,
            'description' => $this->description,
            'buying_price' => $this->buying_price,
            'selling_price' => $this->selling_price,
            'discount' => $this->discount,
            'price' => $this->price,
            'in_stock' => $this->in_stock,
            'status' => $this->status,
        ]);

        flashify()->livewire($this)->fire('created');

        $this->reset('vendor_id', 'supplier_id', 'category_id', 'sub_category_id', 'name', 'sku', 'description', 'buying_price', 'selling_price', 'discount', 'price', 'in_stock', 'status');
    }

    public function edit(Product $product)
    {
        $this->product_id = $product->id;
        $this->vendor_id = $product->vendor_id;
        $this->supplier_id = $product->supplier_id;
        $this->category_id = $product->category_id;
        $this->sub_category_id = $product->sub_category_id;
        $this->name = $product->name;
        $this->sku = $product->sku;
        $this->description = $product->description;
        $this->buying_price = $product->buying_price;
        $this->selling_price = $product->selling_price;
        $this->discount = $product->discount;
        $this->price = $product->price;
        $this->in_stock = $product->in_stock;
        $this->status = $product->status;

    }

    public function delete(Product $product)
    {
        $product->delete();

        flashify()->livewire($this)->fire('deleted');
    }
    public function render()
    {
        $data['products'] = Product::get();

        $data['vendors'] = User::where('role_id', 3)->get();

        $data['suppliers'] = User::where('role_id', 2)->get();

        $data['categories'] = Category::where('parent_id', null)->get();

        $data['subCategories'] = $this->category_id
            ? Category::where('parent_id', $this->category_id)->get()
            : collect();

        return view('livewire.product-form', $data);
    }
}
