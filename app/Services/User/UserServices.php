<?php

namespace App\Services\User;

use App\Repositories\User\IUserRepository;
use Illuminate\Support\Facades\Hash;

class UserServices implements IUserService
{

    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create($name,$email,$password){
        return $this->userRepository->create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }
}
