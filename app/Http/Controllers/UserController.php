<?php

namespace App\Http\Controllers;

use App\DTOs\CreateUserDTO;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request, UserService $userService)
    {
        $userService->create(CreateUserDTO::fromRequest($request));
        return redirect()->back()->with('success', 'User created!');
    }
}
