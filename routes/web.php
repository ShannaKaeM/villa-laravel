<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Main Navigation Routes
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/villas', [PublicController::class, 'villas'])->name('villas');
Route::get('/renting', [PublicController::class, 'renting'])->name('renting');
Route::get('/buying', [PublicController::class, 'buying'])->name('buying');
Route::get('/amenities', [PublicController::class, 'amenities'])->name('amenities');
Route::get('/restaurant', [PublicController::class, 'restaurant'])->name('restaurant');
Route::get('/calendar', [PublicController::class, 'calendar'])->name('calendar');

// About Section Routes
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/villa-view', [PublicController::class, 'villaView'])->name('villa-view');
    Route::get('/local-attractions', [PublicController::class, 'localAttractions'])->name('local-attractions');
    Route::get('/roadmap', [PublicController::class, 'roadmap'])->name('roadmap');
    Route::get('/faq', [PublicController::class, 'faq'])->name('faq');
    Route::get('/committees', [PublicController::class, 'committees'])->name('committees');
    Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

    // Contact Form Submission
    Route::post('/contact', [PublicController::class, 'submitContact'])->name('contact.send');
});

// Villa Detail Pages
Route::get('/villas/{villa}', [PublicController::class, 'showVilla'])->name('villas.show');

// Committee Detail Pages
Route::get('/about/committees/{committee}', [PublicController::class, 'showCommittee'])->name('about.committees.show');

// Blog Category Pages
Route::get('/about/villa-view/category/{category}', [PublicController::class, 'villaViewCategory'])->name('about.villa-view.category');

// Event Detail Pages
Route::get('/calendar/events/{event}', [PublicController::class, 'showEvent'])->name('calendar.events.show');

// Local Attraction Detail Pages
Route::get('/about/local-attractions/{attraction}', [PublicController::class, 'showAttraction'])->name('about.local-attractions.show');

// Roadmap Suggestion Submission
Route::post('/about/roadmap/suggestions', [PublicController::class, 'submitRoadmapSuggestion'])->name('about.roadmap.suggestions.store');
