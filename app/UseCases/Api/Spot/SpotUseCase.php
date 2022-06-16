<?php

namespace App\UseCases\Api\Spot;

use App\Http\Controllers\Controller;
use App\Services\Api\Spot\SpotService;
use Illuminate\Database\Eloquent\Collection;

class SpotUseCase extends Controller
{
    /** @var SpotService */
    private SpotService $resourceService;

    /**
     * @param SpotService $resourceService
     */
    public function __construct(SpotService $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->resourceService->getSpots();
    }
}
