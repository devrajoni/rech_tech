<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\Backend\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::with('category')->with('vendor')->with('supplier')->get();

        return view('backend.product.index', $data);
    }

    public function create()
    {
        return view('backend.product.form');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('backend.product.form', compact('product'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('backend.products.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }
}
