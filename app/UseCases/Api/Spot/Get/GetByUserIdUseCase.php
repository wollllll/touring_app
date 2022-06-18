<?php

namespace App\UseCases\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\Http\Resources\Spot\SpotResource;
use App\Services\Api\Spot\Get\GetSpotsByUserIdService;

class GetByUserIdUseCase extends Controller
{
    /** @var GetSpotsByUserIdService  */
    private GetSpotsByUserIdService $service;

    /**
     * @param GetSpotsByUserIdService $service
     */
    public function __construct(GetSpotsByUserIdService $service)
    {
        $this->service = $service;
    }

    /**
     * @param array $queries
     * @return array
     */
    public function handle(array $queries): array
    {
        return [
            'spots' => SpotResource::collection($this->service->handle($queries))
        ];
    }
}
