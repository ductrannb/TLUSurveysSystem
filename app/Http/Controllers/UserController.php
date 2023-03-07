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

    public function __construct(UserService $user_service, ResponseService $response_service, CookieEditor $cookie_editor)
    {
        $this->user_service = $user_service;
        $this->response_service = $response_service;
        $this->cookie_editor = $cookie_editor;
    }

    public function update(Request $request)
    {
        return $this->user_service->update();
    }

    public function getUser(string $username)
    {
        return $this->user_service->getUser($username);
    }
}
