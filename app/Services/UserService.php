<?php

    namespace App\Services;

    use App\Models\User;
    use App\Repositories\UserRepository;

    class UserService
    {
        public $user_repo;

        public function __construct(UserRepository $user_repo)
        {
            $this->user_repo = $user_repo;
        }

        public function getUser(string $username)
        {
            return $this->user_repo->getUser($username);
        }

        public function getUserByEmail(string $email)
        {
            return $this->user_repo->getUserByEmail($email);
        }
    }
