<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ResponseService;
use App\Services\UserService;
use Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Throwable;
use App\Ultis\CookieEditor;

class AuthController extends Controller
{
    private $user_ctl;
    private $response_service;
    private $cookie_editor;

    public function __construct(UserController $user_ctl, ResponseService $response_service, CookieEditor $cookie_editor)
    {
        // $this->middleware('auth:api', ['except' => ['login', 'resetPassword', 'forgotPassword']]);
        $this->user_ctl = $user_ctl;
        $this->response_service = $response_service;
        $this->cookie_editor = $cookie_editor;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Wrong credentials!');
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
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }

    public function forgotPassword(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink(
                $request->only('email')
            );
            // dd($request->only('email'),$status);
            $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
            return redirect()->route('password.request');

        } catch (Throwable $throw) {
            return $this->response_service->error($throw->getMessage());
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ]);

                    $user->save();
                    event(new PasswordReset($user));
                }
            );
            return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
        } catch (Throwable $throw) {
            return redirect()->back();
        }
    }
}
