<?php

namespace App\UseCases\Api\Spot;

use App\Http\Controllers\Controller;
use App\Services\Api\Spot\SpotService;
use Illuminate\Database\Eloquent\Collection;

class GetSpotUseCase extends Controller
{
    /** @var SpotService */
    private SpotService $spotService;

    /**
     * @param SpotService $spotService
     */
    public function __construct(SpotService $spotService)
    {
        $this->spotService = $spotService;
    }

    /**
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return $this->spotService->getSpotsWithUser();
    }
}
