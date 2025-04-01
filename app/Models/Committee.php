<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'featured_image',
        'purpose',
        'responsibilities',
        'full_description',
        'is_active',
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    public function members()
    {
        return $this->belongsToMany(Owner::class, 'committee_owner')
            ->withPivot(['role', 'expertise', 'term_start', 'term_end', 'is_active'])
            ->withTimestamps();
    }
    
    public function chair()
    {
        return $this->members()->wherePivot('role', 'chair');
    }
    
    public function viceChair()
    {
        return $this->members()->wherePivot('role', 'vice_chair');
    }
    
    public function secretary()
    {
        return $this->members()->wherePivot('role', 'secretary');
    }
    
    public function boardLiaison()
    {
        return $this->members()->wherePivot('role', 'board_liaison');
    }
}
