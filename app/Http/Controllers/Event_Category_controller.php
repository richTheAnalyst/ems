<?php

namespace App\Http\Controllers;

use App\Models\Event_Category;
use Illuminate\Http\Request;

class Event_Category_Controller extends Controller
{
    public function index()
    {
        return Event_Category::paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string',
            'status' => 'required|string',
        ]);

        return Event_Category::create($validated);
    }

    public function show(Event_Category $event_Category)
    {
        return $event_Category;
    }

    public function update(Request $request, Event_Category $event_Category)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'description' => 'string',
            'status' => 'string',
        ]);

        $event_Category->update($validated);
        return $event_Category;
    }

    public function destroy(Event_Category $event_Category)
    {
        $event_Category->delete();
        return response()->noContent();
    }
}