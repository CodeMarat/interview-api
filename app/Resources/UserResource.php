<?php

namespace App\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /**
         * @var User $resource
         */
        $resource = $this->resource;

        return [
            'id' => $resource->id,
            'email' => $resource->email,
            'gender' => $resource->gender,
            'created_at' => $resource->created_at,
            'updated_at' => $resource->updated_at,
        ];
    }
}
