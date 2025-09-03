<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $user = User::first();
        return Inertia::render('Welcome', [
            'user' => $user,
        ]);
    }

    public function hello(): Response
    {
        return Inertia::render('hello.Hello');
    }
}
