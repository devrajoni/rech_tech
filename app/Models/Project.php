<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use App\Models\ProjectCategory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'category_id',
        'title',
        'name',
        'image',
        'description',
        'status',
    ];

    public function registerAllMediaConversions(): void
    {
        $this->addMediaConversion('data');

    }

    public function projectCategory() {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
