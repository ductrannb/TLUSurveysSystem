<?php
namespace App\Repositories;

use App\Models\User;
use App\Services\ResponseService;
use Throwable;

class UserRepository
{

    public $response_service;

    public function __construct(ResponseService $response_service)
    {
        $this->response_service = $response_service;
    }

    public function create(Request $request)
    {
        return User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'fullname' => $request->fullname,
            'api_token' => null,
        ]);
    }

    public function update(array $data)
    {

    }

    public function getUser(string $username)
    {
        return User::where('username', $username)->firstOrFail();
    }

    public function getUserByEmail(string $email)
    {
        return User::where('email', $email)->firstOrFail();
    }
}
