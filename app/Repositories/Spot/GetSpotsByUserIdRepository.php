<?php

namespace App\Repositories\Spot;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

class GetSpotsByUserIdRepository extends BaseRepository
{
    /**
     * @param array $inputs
     * @return Collection
     */
    public function getSpotsByUserId(array $inputs): Collection
    {
        return $this->spot
            ->where('user_id', Arr::get($inputs, 'user_id'))
            ->get();
    }
}
