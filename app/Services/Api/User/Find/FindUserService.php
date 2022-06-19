<?php

namespace App\Services\Api\User\Find;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\User\Find\FindUserRepository;

class FindUserService extends Controller
{
    /** @var FindUserRepository  */
    private FindUserRepository $repository;

    /**
     * @param FindUserRepository $repository
     */
    public function __construct(FindUserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $queries
     * @return User
     */
    public function handle(array $queries): User
    {
        return $this->repository->find($queries);
    }
}
