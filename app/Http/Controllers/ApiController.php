<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Repository\UserRepository;
use App\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ApiController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function registration(UserRequest $request): JsonResponse
    {
        $status = 200;
        $msg = 'User created successfully!';
        try {
            $this->userRepository->register($request->validated());
        } catch (\Exception $exception) {
            $status = $exception->getCode();
            $msg = $exception->getMessage();
        }

        return response()->json([
            'status' => $status,
            'message' => $msg
        ], $status);
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function users(): AnonymousResourceCollection
    {
        return UserResource::collection($this->userRepository->showAllUsers());
    }

    /**
     * @param int $id
     * @return UserResource
     */
    public function profile(int $id): UserResource
    {
        return UserResource::make($this->userRepository->showUser($id));
    }
}
