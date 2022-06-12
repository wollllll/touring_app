<?php

namespace App\Services\Api\Spot;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\SpotRepository;
use Illuminate\Database\Eloquent\Collection;

class SpotService extends Controller
{
    /** @var SpotRepository $spotRepository */
    private SpotRepository $spotRepository;

    /**
     * @param SpotRepository $spotRepository
     */
    public function __construct(SpotRepository $spotRepository)
    {
        $this->spotRepository = $spotRepository;
    }

    /**
     * @return Collection
     */
    public function getSpotsWithUser(): Collection
    {
        return $this->spotRepository->getWithUser();
    }
}
