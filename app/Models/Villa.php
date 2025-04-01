<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Villa extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_number',
        'display_name',
        'description',
        'floorplan_type',
        'view_type',
        'floor_level',
        'stories',
        'bedrooms',
        'bathrooms',
        'square_feet',
        'is_featured',
        'is_for_rent',
        'is_for_sale',
        'rental_rate',
        'sale_price',
        'featured_image',
        'gallery_images',
        'floorplan_image',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_for_rent' => 'boolean',
        'is_for_sale' => 'boolean',
        'bathrooms' => 'decimal:1',
        'rental_rate' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'gallery_images' => 'array',
    ];

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Owner::class)
            ->withPivot(['is_primary_owner', 'ownership_percentage', 'ownership_start_date', 'ownership_end_date'])
            ->withTimestamps();
    }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (!$this->featured_image) {
            return asset('images/Villas/Featured Image/default.png');
        }
        return Storage::url('villas/featured/' . $this->featured_image);
    }

    public function getGalleryImageUrlsAttribute(): array
    {
        return collect($this->gallery_images ?? [])
            ->map(fn ($image) => Storage::url('villas/gallery/' . $image))
            ->all();
    }

    public function getFloorplanImageUrlAttribute(): ?string
    {
        if (!$this->floorplan_image) {
            return null;
        }
        return Storage::url('villas/floorplans/' . $this->floorplan_image);
    }
}
