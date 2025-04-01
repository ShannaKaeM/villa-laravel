<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function afterCreate(): void
    {
        $project = $this->record;
        
        // Ensure the creating committee is added as a collaborator with manager role
        $project->collaboratingCommittees()->syncWithoutDetaching([
            $project->committee_id => ['role' => 'manager']
        ]);
    }
}
