<?php

namespace App\Services\User;

interface IUserService{
    public function create($name,$email,$password);
}
