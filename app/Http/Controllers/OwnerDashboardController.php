<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Committee;

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
}
