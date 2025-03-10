<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        return EventCategory::paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string',
            'status' => 'required|string',
        ]);

        return EventCategory::create($validated);
    }

    public function show(EventCategory $eventCategory)
    {
        return $eventCategory;
    }

    public function update(Request $request, EventCategory $eventCategory)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'description' => 'string',
            'status' => 'string',
        ]);

        $eventCategory->update($validated);
        return $eventCategory;
    }

    public function destroy(EventCategory $eventCategory)
    {
        $eventCategory->delete();
        return response()->noContent();
    }
}