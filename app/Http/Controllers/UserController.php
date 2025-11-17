<?php

namespace App\Http\Controllers;

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

}
