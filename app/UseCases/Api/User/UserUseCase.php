<?php

namespace App\UseCases\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\Spot\SpotResource;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\Api\User\UserService;

class UserUseCase extends Controller
{
    /** @var UserService */
    private UserService $userService;

    /**
     * @param UserService $spotService
     */
    public function __construct(UserService $spotService)
    {
        $this->userService = $spotService;
    }

    /**
     * @param User $user
     * @param array $inputs
     * @return SpotResource[]
     * @throws \Exception
     */
    public function update(User $user, array $inputs): array
    {
        return [
            'user' => new UserResource($this->userService->update($user, $inputs)),
            'message' => 'アカウントを更新しました！'
        ];
    }
}
