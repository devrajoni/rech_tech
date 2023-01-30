<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use App\Models\ProjectCategory;
use App\Models\Project;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProjectGallery extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'project_id',
    ];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
