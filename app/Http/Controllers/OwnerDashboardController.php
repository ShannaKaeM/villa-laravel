<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Committee;
use Illuminate\Http\Request;

class OwnerDashboardController extends Controller
{
    public function dashboard()
    {
        $owner = auth()->guard('owner')->user();
        $committees = $owner->committees;
        
        return view('owner.dashboard', [
            'owner' => $owner,
            'committees' => $committees,
        ]);
    }

    public function showCommittee($slug)
    {
        $owner = auth()->guard('owner')->user();
        $committee = Committee::where('slug', $slug)->firstOrFail();
        
        return view('owner.committee', [
            'owner' => $owner,
            'committee' => $committee,
            'membership' => $owner->committees()->where('committee_id', $committee->id)->first()->pivot,
        ]);
    }

    public function projects()
    {
        $owner = auth()->guard('owner')->user();
        $committees = $owner->committees()->with(['projects' => function ($query) {
            $query->withCount('tasks');
        }])->get();

        return view('owner.projects', [
            'owner' => $owner,
            'committees' => $committees,
        ]);
    }

    public function showProject($id)
    {
        $owner = auth()->guard('owner')->user();
        $project = Project::with(['tasks', 'committee'])->findOrFail($id);
        
        // Check if user has access to this project's committee
        abort_unless(
            $owner->committees->contains('id', $project->committee_id),
            403,
            'You do not have access to this project'
        );

        return view('owner.project', [
            'owner' => $owner,
            'project' => $project,
        ]);
    }
}
