<?php

namespace App\Repositories\Spot;

use App\Models\Spot;
use Illuminate\Database\Eloquent\Collection;

class SpotRepository extends BaseRepository
{
    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->spot
            ->query()
            ->with(['user'])
            ->get();
    }

    /**
     * @param array $inputs
     * @return Spot
     */
    public function store(array $inputs): Spot
    {
        return $this->spot
            ->create($inputs);
    }
}