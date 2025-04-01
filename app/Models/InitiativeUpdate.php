<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitiativeUpdate extends Model
{
    use HasFactory;

    protected $fillable = [
        'initiative_id',
        'content',
        'status',
        'percentage_complete',
        'author_id',
        'is_public',
        'attachments',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'percentage_complete' => 'integer',
        'attachments' => 'array',
    ];

    public function initiative()
    {
        return $this->belongsTo(Initiative::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
