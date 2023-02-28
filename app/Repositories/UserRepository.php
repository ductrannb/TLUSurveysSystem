<?php

    namespace App\Repositories;

    use App\Models\User;

    class UserRepository
    {
        public function create(Request $request)
        {
            return User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'fullname' => $request->fullname,
                'api_token' => Str::random(60),
            ]);
        }

        public function getUser($username)
        {
            return User::where('username', $username)->firstOrFail();
        }
    }
