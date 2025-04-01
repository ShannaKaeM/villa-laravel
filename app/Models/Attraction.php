<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'description',
        'featured_image',
        'gallery_images',
        'category',
        'distance',
        'address',
        'website',
        'phone',
        'hours',
        'price_range',
        'rating',
        'is_featured',
        'meta_title',
        'meta_description',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'hours' => 'array',
        'is_featured' => 'boolean',
        'rating' => 'decimal:1',
        'distance' => 'decimal:1',
        'latitude' => 'decimal:6',
        'longitude' => 'decimal:6',
    ];
}
