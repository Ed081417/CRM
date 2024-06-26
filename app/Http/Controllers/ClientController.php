<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ClientController extends Controller
{
    /**
     * Display the client page.
     */
    public function index(): Response
    {
        return Inertia::render('Client');
    }
}
