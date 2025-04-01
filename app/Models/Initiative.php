<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiative extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'timeline',
        'status',
        'priority',
        'budget',
        'start_date',
        'target_completion_date',
        'actual_completion_date',
        'is_public',
        'category',
        'responsible_committee_id',
    ];

    protected $casts = [
        'start_date' => 'date',
        'target_completion_date' => 'date',
        'actual_completion_date' => 'date',
        'is_public' => 'boolean',
        'budget' => 'decimal:2',
    ];

    public function committee()
    {
        return $this->belongsTo(Committee::class, 'responsible_committee_id');
    }

    public function updates()
    {
        return $this->hasMany(InitiativeUpdate::class)->orderBy('created_at', 'desc');
    }
}
