<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\UserService;

class UserController extends Controller
{
    //

    public function register(){
        return Inertia::render('Public/Register');
    }

    public function store(Request $request, UserService $service){
        //
        $validated = $request->validate([
            'name'                  => ['required', 'string', 'max:255'],
            'email'                 => ['required', 'email', 'max:255', 'unique:users'],
            'password'              => ['required', 'min:8', 'confirmed'],
        ]);

        $user = $service->register($validated);

        return response()->json([
            'message' => 'User registered successfully',
            'user_id' => $user->id
        ]);
    }

}
