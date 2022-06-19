<?php

namespace App\UseCases\Api\User\Find;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Services\Api\User\Find\FindUserService;

class FindUserUseCase extends Controller
{
    /** @var FindUserService  */
    private FindUserService $service;

    /**
     * @param FindUserService $service
     */
    public function __construct(FindUserService $service)
    {
        $this->service = $service;
    }

    /**
     * @param array $queries
     * @return array
     */
    public function handle(array $queries): array
    {
        return [
            'user' => new UserResource($this->service->handle($queries))
        ];
    }
}
