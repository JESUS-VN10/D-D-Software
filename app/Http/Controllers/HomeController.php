<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user = User::first();
        return Inertia::render('Welcome', [
            'user' => $user,
        ]);
    }

    public function hello(): \Inertia\Response
    {
        return Inertia::render('hello.Helloaa');
    }
}
