# 🧱 Laravel DTO Example – Clean & Reusable Data Structures

This repository demonstrates how to implement and use **Data Transfer Objects (DTOs)** in a Laravel application for **clean, reusable, and testable** code — across **Web Controllers**, **API endpoints**, and **CLI commands**.

---

## 📌 What is a DTO?

A **Data Transfer Object (DTO)** is a simple object used to **encapsulate data** and pass it between layers of an application. It helps keep your codebase clean by:

- Separating concerns (e.g., from requests or form logic)
- Reducing tight coupling between controllers and services
- Improving testability and type safety

---

## 🎯 Why Use DTOs in Laravel?

✅ Structure incoming data clearly  
✅ Improve readability and developer experience (IDE auto-complete, type hints)  
✅ Reuse same structure across Web, API, and CLI  
✅ Make services cleaner and more focused  
✅ Avoid passing entire `$request` or raw arrays  

---

## 🛠️ Example: `CreateUserDTO`

```php
// app/DTOs/CreateUserDTO.php

namespace App\DTOs;

class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'],
            email: $data['email'],
            password: $data['password'],
        );
    }
}
