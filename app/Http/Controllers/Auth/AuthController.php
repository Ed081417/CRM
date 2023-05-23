<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class AuthController extends Controller
{
    use HttpResponse;

    /**
     * Show login form.
     */
    public function showLoginForm()
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * Login.
     */
    public function login(Request $request)
    {
        try {
            if (Auth::guard('admin')->attempt([
                'email' => $request['Admin']['email'],
                'password' => $request['Admin']['password']
            ])) {
                $admin = Auth::guard('admin')->user();
                $admin->tokens()->delete();
                $data = [
                    "admins" => [
                        "email" => $request['Admin']['email'],
                        "token" => $admin->createToken($request['Admin']['email'])->plainTextToken
                    ]
                ];

                return $this->success($data, 'SUCCESS', 'Login successfully.');
            }
        } catch (\Throwable $th) {
            Log::channel('api')->error("Error:" . $th->getMessage() . "\n" . $request);

            return $this->error();
        }
    }
}
