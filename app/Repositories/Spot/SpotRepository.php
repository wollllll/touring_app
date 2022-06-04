<?php

namespace App\Repositories\Spot;

use App\Http\Controllers\Controller;
use App\Models\Spot;
use Illuminate\Database\Eloquent\Collection;

class SpotRepository extends Controller
{
    /** @var Spot  */
    private Spot $spot;

    /**
     * @param Spot $spot
     */
    public function __construct(Spot $spot)
    {
        $this->spot = $spot;
    }

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
}
