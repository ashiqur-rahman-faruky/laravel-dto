<?php

namespace App/Http/Controllers/API;

use App\DTOs\CreateUserDTO;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function store(Request $request, UserService $userService)
    {
        $dto = CreateUserDTO::fromRequest($request);
        $userService->create($dto);
        return response()->json([
            'status' => true,
            'message' => 'User created'
        ]);
    }
}
