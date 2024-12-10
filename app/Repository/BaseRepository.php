<?php

namespace App\Repository;

use App\Repository\Interface\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(protected Model $model)
    {
    }

    /**
     * @return Model
     */
    public function model(): Model
    {
        return $this->model;
    }

    public function create(array $attributes): mixed
    {
        return $this->model->create($attributes);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function findOrFail(int $id): mixed
    {
        return $this->model->findOrFail($id);
    }
}
