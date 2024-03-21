<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Inertia\Inertia;
use Inertia\Response;

class EmployeeController extends Controller
{
    /**
     * Display the employee page.
     */
    public function index(): Response
    {
        $employees = Employee::get();

        return Inertia::render('Employee', [
            'employees' => $employees,
        ]);
    }
}
