<?php

namespace App\Repository\Interface;

interface UserRepositoryInterface
{
    public function register($data);

    public function showAllUsers();

    public function showUser($id);
}
