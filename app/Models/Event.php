<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'location',
        'category',
        'featured_image',
        'max_attendees',
        'is_public',
        'is_featured',
        'registration_required',
        'registration_deadline',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'registration_deadline' => 'datetime',
        'is_public' => 'boolean',
        'is_featured' => 'boolean',
        'registration_required' => 'boolean',
    ];

    public function attendees()
    {
        return $this->belongsToMany(Owner::class, 'event_attendees')
            ->withPivot(['status', 'guests', 'notes'])
            ->withTimestamps();
    }
}
