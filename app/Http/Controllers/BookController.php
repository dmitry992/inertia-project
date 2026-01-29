<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class BookController extends Controller
{
    public function index()
    {
        $props = [
            'number' => 10,
            'title' => 'String',
            'test_array' => [1, 2, 3],
            'test_object' => [
                'user' => 'User 1',
                'email' => 'user@example.com',
            ]
        ];

        return Inertia::render('Books/Index',$props);
    }
}

