<?php

namespace App\Http\Controllers;

class Home
{
    public function index(): array
    {
        return ['success' => ['code' => 200, 'message' => 'Restler is up and running!']];
    }
}
