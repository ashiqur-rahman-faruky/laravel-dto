<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DTOs\CreateUserDTO;
use App\Services\UserService;

class CreateUserCommand extends Command
{
    protected $signature = 'user:create {name} {email} {password}';
    protected $description = 'Create a new user from CLI';

    public function handle(UserService $userService)
    {
        $dto = new CreateUserDTO(
            name: $this->argument('name'),
            email: $this->argument('email'),
            password: $this->argument('password'),
        );

        $userService->create($dto);

        $this->info('User created successfully!');
    }
}
