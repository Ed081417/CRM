<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EmployeeController extends Controller
{
    /**
     * Display the employee page.
     */
    public function index(): Response
    {
        $employees = Employee::orderByDesc('id')->get();

        return Inertia::render('Employee', [
            'employees' => $employees,
        ]);
    }

    /**
     * Store employee record.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Employee::class],
            'skills' => ['required', 'string', 'max:255'],
        ]);

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'skills' => $request->skills,
        ]);

        return redirect()->route('employees');
    }
}
