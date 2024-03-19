<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{
    /**
     * Display the task page.
     */
    public function index(): Response
    {
        return Inertia::render('Task');
    }
}
