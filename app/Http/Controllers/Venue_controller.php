<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
class Venue_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Venue::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|string|max:255",
            "address" => "required|string|min:4|unique",
            "city"=> "required|string|max:255",
            "capacity"=> "required|integer|max:255",
            "facilities"=> "required|string|max:255",
            "status"=> "required|string",

        ]);
        $venue = Venue::create($validate);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $venue)
    {
        $validate = $request->validate([
            "name" => "required|string|max:255",
            "address" => "required|string|min:4|unique",
            "city"=> "required|string|max:255",
            "capacity"=> "required|integer|max:255",
            "facilities"=> "required|string|max:255",
            "status"=> "required|string",
        ]);
        $venue->update($validate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return response()->noContent();
    }
}
