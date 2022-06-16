<?php

namespace App\Services\Api\Spot;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\ResourceRepository;
use Illuminate\Database\Eloquent\Collection;

class SpotService extends Controller
{
    /** @var ResourceRepository $spotRepository */
    private ResourceRepository $spotRepository;

    /**
     * @param ResourceRepository $spotRepository
     */
    public function __construct(ResourceRepository $spotRepository)
    {
        $this->spotRepository = $spotRepository;
    }

    /**
     * @return Collection
     */
    public function getSpots(): Collection
    {
        return $this->spotRepository->get();
    }
}
