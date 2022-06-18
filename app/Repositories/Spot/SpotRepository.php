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

    /**
     * @param Spot $spot
     * @param array $inputs
     * @return bool
     */
    public function update(Spot $spot, array $inputs): bool
    {
        return $spot
            ->update($inputs);
    }
}
