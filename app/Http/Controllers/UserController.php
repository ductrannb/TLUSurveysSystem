<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use App\Services\UserService;
use App\Ultis\CookieEditor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    private $user_service;
    private $response_service;
    private $cookie_editor;
    private $token_ctl;

    public function __construct(UserService $user_service, ResponseService $response_service, CookieEditor $cookie_editor, ApiTokenController $token_ctl)
    {
        $this->user_service = $user_service;
        $this->response_service = $response_service;
        $this->cookie_editor = $cookie_editor;
        $this->token_ctl = $token_ctl;
    }

    public function update(Request $request)
    {
        return $this->user_service->update();
    }

}
