<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * @param User $user
     * @param array $inputs
     * @return bool
     */
    public function update(User $user, array $inputs): bool
    {
        return $user
            ->update($inputs);
    }
}
