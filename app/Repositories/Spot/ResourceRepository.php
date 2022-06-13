<?php

namespace App\Repositories\Spot;

use Illuminate\Database\Eloquent\Collection;

class ResourceRepository extends BaseController
{
    /**
     * @return Collection
     */
    public function getWithUser(): Collection
    {
        return $this->spot
            ->query()
            ->with(['user'])
            ->get();
    }
}
