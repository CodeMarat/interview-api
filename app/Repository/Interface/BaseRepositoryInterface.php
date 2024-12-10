<?php

namespace App\Repository\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function model(): Model;

    public function create(array $attributes): mixed;

    public function all(): Collection;

    public function findOrFail(int $id): mixed;
}
