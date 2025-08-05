<?php

namespace App\DTOs;

class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}

    public static function fromRequest($data): self
    {
        return new self(
            name: $data->name,
            email: $data->email,
            password: $data->password,
        );
    }
}
