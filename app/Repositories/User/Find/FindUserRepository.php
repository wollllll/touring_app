<?php

namespace App\Repositories\User\Find;

use App\Models\User;
use App\Repositories\User\BaseRepository;
use Illuminate\Support\Arr;

class FindUserRepository extends BaseRepository
{
    /**
     * @param array $inputs
     * @return User
     */
    public function find(array $inputs): User
    {
        return $this->user
            ->findOrFail(Arr::get($inputs, 'id'));
    }
}
