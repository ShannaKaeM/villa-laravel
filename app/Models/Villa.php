<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_for_rent' => 'boolean',
        'is_for_sale' => 'boolean',
        'bathrooms' => 'decimal:1',
        'rental_rate' => 'decimal:2',
        'sale_price' => 'decimal:2',
    ];

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Owner::class)
            ->withPivot(['is_primary_owner', 'ownership_percentage', 'ownership_start_date', 'ownership_end_date'])
            ->withTimestamps();
    }
}
