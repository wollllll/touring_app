<?php

namespace App\UseCases\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\Http\Resources\Spot\SpotResource;
use App\Services\Api\Spot\Get\GetSpotByUserIdService;

class GetSpotByUserIdUseCase extends Controller
{
    /** @var GetSpotByUserIdService  */
    private GetSpotByUserIdService $service;

    /**
     * @param GetSpotByUserIdService $service
     */
    public function __construct(GetSpotByUserIdService $service)
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
