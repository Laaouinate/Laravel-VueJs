<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\service\UserService;

class RegistreController extends Controller
{
    public function __construct(UserService $UserService)
	{
		$this->UserService = $UserService;
    }
    
    public function create()
    {
        return view('items.registe');
    }

    public function store(Request $Request)
    {
        $user = new User;
        $user->name = $Request->input('name');
        $user->email = $Request->input('email');
        $user->password = $Request->input('password');

        $this->UserService->createUser($user);
        return redirect('/home');
    }
}
