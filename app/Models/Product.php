<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Category;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory; use InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
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



    public function registerAllMediaConversions(): void
    {
        $this->addMediaConversion('image')
            ->width(490)
            ->height(490);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
