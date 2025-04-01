<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use App\Models\Committee;
use App\Models\Amenity;
use App\Models\Event;
use App\Models\Post;
use App\Models\Attraction;
use App\Models\Initiative;
use App\Models\Faq;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $featuredVillas = Villa::where('is_featured', true)->take(3)->get();
        return view('public.home', compact('featuredVillas'));
    }

    public function villas(Request $request)
    {
        $query = Villa::query();

        // Apply status filter
        if ($request->filled('status')) {
            if ($request->status === 'rent') {
                $query->where('is_for_rent', true);
            } elseif ($request->status === 'sale') {
                $query->where('is_for_sale', true);
            }
        }

        // Apply single-choice filters
        if ($request->filled('floor_level')) {
            $query->where('floor_level', $request->floor_level);
        }

        if ($request->filled('stories')) {
            $query->where('stories', $request->stories);
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', $request->bathrooms);
        }

        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', $request->bedrooms);
            
            if ($request->filled('floorplan')) {
                $query->where('floorplan_type', $request->floorplan);
            }
        }

        // Default sorting
        $query->orderBy('is_featured', 'desc')
              ->orderBy('unit_number', 'asc');

        $villas = $query->paginate(12)->withQueryString();

        return view('public.villas', compact('villas'));
    }



    public function amenities()
    {
        $amenities = Amenity::paginate(12);
        return view('public.amenities.index', compact('amenities'));
    }

    public function restaurant()
    {
        return view('public.restaurant.index');
    }

    public function calendar()
    {
        $events = Event::orderBy('start_date')->paginate(12);
        return view('public.calendar.index', compact('events'));
    }

    public function villaView()
    {
        $featuredPost = Post::where('is_featured', true)->first();
        $recentPosts = Post::where('id', '!=', $featuredPost->id ?? 0)
                          ->latest()
                          ->take(5)
                          ->get();
        $categories = Post::select('category')->distinct()->get();
        
        return view('public.about.villa-view.index', compact('featuredPost', 'recentPosts', 'categories'));
    }

    public function localAttractions()
    {
        $attractions = Attraction::paginate(12);
        return view('public.about.local-attractions.index', compact('attractions'));
    }

    public function roadmap()
    {
        $initiatives = Initiative::orderBy('timeline')->get();
        return view('public.about.roadmap.index', compact('initiatives'));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('public.about.faq.index', compact('faqs'));
    }

    public function committees()
    {
        $committees = Committee::where('is_active', true)->get();
        return view('public.about.committees.index', compact('committees'));
    }

    public function contact()
    {
        return view('public.about.contact.index');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // TODO: Implement contact form submission logic
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }

    public function showVilla(Villa $villa)
    {
        return view('public.villas.show', compact('villa'));
    }

    public function showCommittee(Committee $committee)
    {
        return view('public.about.committees.show', compact('committee'));
    }

    public function villaViewCategory($category)
    {
        $posts = Post::where('category', $category)
                     ->where('is_public', true)
                     ->latest()
                     ->paginate(12);
        return view('public.about.villa-view.category', compact('posts', 'category'));
    }

    public function showEvent(Event $event)
    {
        return view('public.calendar.events.show', compact('event'));
    }

    public function showAttraction(Attraction $attraction)
    {
        return view('public.about.local-attractions.show', compact('attraction'));
    }

    public function submitRoadmapSuggestion(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'priority' => 'required|in:low,medium,high',
        ]);

        // TODO: Implement roadmap suggestion submission logic
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your suggestion. The board will review it shortly.');
    }
}
