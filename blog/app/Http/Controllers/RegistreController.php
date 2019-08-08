<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service\UserService;
use App\Http\Requests\userRequest;
use App\User;

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

    public function store(userRequest $Request)
    {
        $this->UserService->createUser($Request);
        return redirect('/home');
    }
}
