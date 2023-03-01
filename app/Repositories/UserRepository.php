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
        try {
            if ($username != null) {
                return User::where('username', $username)->firstOrFail();
            }
        } catch (Throwable $throw) {
            return $this->response_service->error($throw->getMessage());
        }
    }

    public function getUserByEmail(string $email)
    {
        try {
            return User::where('email', $email)->firstOrFail();
        } catch (Throwable $throw) {
            return $this->response_service->error($throw->getMessage());
        }
    }
}
