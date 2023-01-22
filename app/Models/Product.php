<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'supplier_id',
        'category_id',
        'sub_category_id',
        'name',
        'sku',
        'description',
        'buying_price',
        'selling_price',
        'discount',
        'price',
        'in_stock',
        'status',
    ];

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function supplier()
    {
        return $this->belongsTo(User::class, 'supplier_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
