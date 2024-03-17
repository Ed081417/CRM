<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    /**
     * Display the user page.
     */
    public function index(): Response
    {
        return Inertia::render('User');
    }
}
