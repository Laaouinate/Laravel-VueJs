<?php

namespace App\service;


use App\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Http\Requests\userRequest;


class UserService {

    public function createUser(userRequest $Request)
    {
        $user = new User;
        $user->name = $Request->input('name');
        $user->email = $Request->input('email');
        $user->password = $Request->input('password');
        return $this->createUserWithParams($user);
    }

    public function createUserWithParams(User $user)
    {
        return User::create(['name'=>$user->name, 'email'=>$user->email, 'password'=>Hash::make($user->password)]);        
    }

}