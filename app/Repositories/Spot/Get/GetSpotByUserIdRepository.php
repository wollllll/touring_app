<?php

namespace App\Repositories\Spot\Get;

use App\Repositories\Spot\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

class GetSpotByUserIdRepository extends BaseRepository
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
