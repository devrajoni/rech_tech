<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Spatie\Permission\Models\Role;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class ProductForm extends Component
{
    use WithFileUploads;
    public $product_id;

    public $category_id;
    public $sub_category_id;

    public $title;

    public $image;
    public $name;

    public $mediaComponentNames = ['image'];

    public $sku;

    public $description;

    public $buying_price;

    public $selling_price;

    public $discount;

    public $in_stock;

    public $status = 'Active';

    public function mount()
    {
        if($this->product_id){
            $product = Product::find($this->product_id);

            $this->category_id = $product->category_id;
            $this->sub_category_id = $product->sub_category_id;
            $this->title = $product->title;
            $this->name = $product->name;
            $this->sku = $product->sku;
            $this->description = $product->description;
            $this->buying_price = $product->buying_price;
            $this->selling_price = $product->selling_price;
            $this->discount = $product->discount;
            $this->status = $product->status;

        }
        if($this->product_id){
            $this->in_stock = "";
        }

    }


    public function submit()
    {
        $this->validate([
            'category_id' => [
                'nullable',
            ],
            'sub_category_id' => [
                'nullable',
            ],
            'title' => [
                'required',
            ],
            'image' => ['image'],

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
            'in_stock' => [
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ]);
        $data = [
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'title' => $this->title,
            'name' => $this->name,

            'sku' => $this->sku,
            'description' => $this->description,
            'buying_price' => $this->buying_price,
            'selling_price' => $this->selling_price,
            'discount' => $this->discount,
            'price' => $this->selling_price - $this->discount,
            'in_stock' => $this->in_stock,
            'status' => $this->status,
        ];



        if($this->product_id) {

           $product = Product::find($this->product_id);

           $product->update($data);
        }else{
            $product = (object) $data;
            $product->addMedia(public_path('uploads/' . $this->image))->toMediaCollection('image');

            Product::create($data);



        }


        return redirect()->route('backend.products.index')->flashify($this->product_id ? 'updated' : 'created');
    }

    public function render()
    {
        $data['categories'] = Category::where('parent_id', null)->get();

        $data['subCategories'] = $this->category_id
            ? Category::where('parent_id', $this->category_id)->get()
            : collect();

        return view('livewire.product-form', $data);
    }
}
