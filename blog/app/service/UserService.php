<?php

namespace App\service;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserService {

    public function createUser(User $user){
        return User::create(['name'=>$user->name, 'email'=>$user->email, 'password'=>Hash::make($user->password)]);
        
    }

}