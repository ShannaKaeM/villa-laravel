<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Owner extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'avatar',
        'role',
        'unit_number',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'notes',
        'password',
    ];

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function villas(): BelongsToMany
    {
        return $this->belongsToMany(Villa::class)
            ->withPivot(['is_primary_owner', 'ownership_percentage', 'ownership_start_date', 'ownership_end_date'])
            ->withTimestamps();
    }
    
    public function committees(): BelongsToMany
    {
        return $this->belongsToMany(Committee::class, 'committee_owner')
            ->withPivot(['role', 'expertise', 'term_start', 'term_end', 'is_active'])
            ->withTimestamps();
    }
}
