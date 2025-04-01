<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'gallery_images',
        'details',
        'features',
        'usage_guidelines',
        'hours_of_operation',
        'is_active',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'features' => 'array',
        'is_active' => 'boolean',
    ];
}
