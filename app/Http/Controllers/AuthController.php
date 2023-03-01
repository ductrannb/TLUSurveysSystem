<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Services\ResponseService;
use App\Services\UserService;
use App\Ultis\CookieEditor;
use Throwable;

class AuthController extends Controller
{
    private $user_service;
    private $response_service;

    public function __construct(UserService $user_service, ResponseService $response_service)
    {
        $this->middleware('auth:api', ['except' => ['login', 'resetPassword']]);
        $this->user_service = $user_service;
        $this->response_service = $response_service;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (! $token = auth()->attempt($credentials)) {
            return $this->response_service->error('Unauthenticate');
        }
        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    // public function resetPassword(Request $request)
    // {
    //     return $email = $this->user_service->getUserByEmail($request->email)->email;
    // }
}