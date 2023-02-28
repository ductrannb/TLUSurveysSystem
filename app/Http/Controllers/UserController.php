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

    public function login(Request $request)
    {
        // dd($request);
        try {
            $user = $this->user_service->getUser($request->username);
            if ($user->username == $request->username and $user->password == $request->password) {
                $token = $this->token_ctl->update($request);
                dd($token);
                $this->cookie_editor->setCookie($token);
                return $this->response_service->success("Đăng nhập thành công");
            } else {
                return $this->response_service->error("Tài khoản hoặc mật khẩu không chính xác");
            }
        } catch (Throwable $throw) {
            return $this->response_service->error($throw->getMessage());
        }
    }
}
