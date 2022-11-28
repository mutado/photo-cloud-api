<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Authenticate the user.
     *
     * This endpoint is used to authenticate the user. It will return a JWT token with user information.
     *
     * @group Authentication
     *
     * @unauthenticated
     * @param Request $request
     * @return JsonResponse
     */
    public function authenticate(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'User successfully authenticated',
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('auth_token')->plainTextToken,
            ]);
        }

        return response()->json([
            'message' => 'The provided credentials do not match our records.',
        ], 401);
    }
}
