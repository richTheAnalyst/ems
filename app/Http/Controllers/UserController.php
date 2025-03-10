<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request)
    {
        //
        $validated = $request->validate([
            "name"=> "required|string|max:255",
            "email"=> "required|string|email|unique:users|max:255",
            "password"=> "required|string|min:6",
            "role" => "required|string",
            "status" => "required|string",
            ]);
            $validated['password'] = Hash::make($validated['password']);
            return User::create($validated);
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
    
        public function update(Request $request, User $user)
        {
            $validated = $request->validate([
                'name' => 'string|max:255',
                'email' => 'string|email|max:255|unique:users,email,'.$user->id,
                'password' => 'string|min:8',
                'role' => 'string',
                'status' => 'string',
            ]);
    
            if (isset($validated['password'])) {
                $validated['password'] = Hash::make($validated['password']);
            }
    
            $user->update($validated);
            return $user;
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user ->delete();
        return response()->noContent();
    }
}
