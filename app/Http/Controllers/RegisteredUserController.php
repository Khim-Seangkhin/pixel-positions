<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedUser = $request->validate([
            'name' => ['required'],
            'email' => ['required','unique:users','email','max:255'],
            'password' => ['required','confirmed', Password::min(6)]
        ]);

        $validatedEmployer = $request->validate([
            'employer' => ['required'],
            'logo' => ['required',File::types(['png','jpg','webp'])]
        ]);

        $user = User::create($validatedUser);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $validatedEmployer['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);
        return redirect('/');

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
