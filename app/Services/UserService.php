<?php

namespace App\Services;

class UserService
{
    public function calculateAge(string $birthdate): int
    {
        return now()->diffInYears(\Carbon\Carbon::parse($birthdate));
    }
}
