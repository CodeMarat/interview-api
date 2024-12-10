<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interface\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function register($data)
    {
        return $this->model()->create($data);
    }

    public function showAllUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model()->all();
    }

    public function showUser($id)
    {
        return $this->model()->findOrFail($id);
    }
}
