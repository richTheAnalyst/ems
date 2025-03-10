<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::with(['user', 'event'])->paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'string',
            'status' => 'required|string',
        ]);

        return Review::create($validated);
    }

    public function show(Review $review)
    {
        return $review->load(['user', 'event']);
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'event_id' => 'exists:events,id',
            'rating' => 'integer|between:1,5',
            'comment' => 'string',
            'status' => 'string',
        ]);

        $review->update($validated);
        return $review;
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return response()->noContent();
    }
}