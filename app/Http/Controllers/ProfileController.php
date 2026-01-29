<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('Books/Profile');
    }

    public function submit(Request $request)
    {

        // Возвращаем обратно с флеш-сообщением
        return redirect('/profile')->with('success', 'Данные отправлены!');
    }
}
