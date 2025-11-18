<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserService{

    //
    public function register(array $data):User{
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function login(array $credentials){
        return Auth::attempt($credentials);
    }

    public function logout(){
        return Auth::logout();
    }

} 