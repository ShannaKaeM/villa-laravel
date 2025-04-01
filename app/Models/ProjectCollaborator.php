<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectCollaborator extends Pivot
{
    protected $table = 'project_collaborators';

    protected $fillable = [
        'project_id',
        'committee_id',
        'role',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
