<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\UserService;

class UserController extends Controller
{
    //

    public function register(){
        return Inertia::render('Public/Register');
    }

    public function store(UserService $service, RegisterRequest $request){
        //
        $service->register($request->validated());

        return redirect()->route('login')
        ->with('success','Registration successful! Please sign in !');
    }


    public function login(){
        return Inertia::render('Public/Login');
    }

    public function requestLogin(UserService $service, LoginRequest $request ){

        $credentials = $request->validated();

        if(!$service->login($credentials, $request)){
            return back()->withErrors([
                'email'=>'Invalid login credentials'
            ]);
        }

       $request->session()->regenerate();

           return redirect()->route('dashboard')->with('success','Logged in successfully');
    }


    public function logout(Request $request, UserService $service){

        $service->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }

}
