<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

}
