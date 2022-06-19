<?php

namespace App\Repositories\User\Find;

use App\Models\User;
use App\Repositories\User\BaseRepository;
use Illuminate\Support\Arr;

class FindUserRepository extends BaseRepository
{
    /**
     * @param array $inputs
     * @return User|null
     */
    public function find(array $inputs): ?User
    {
        return $this->user
            ->load(['spots.user'])
            ->find(Arr::get($inputs, 'id'));
    }
}
