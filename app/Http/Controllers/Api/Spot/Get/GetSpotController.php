<?php

namespace App\Http\Controllers\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpotResource;
use App\UseCases\Api\Spot\GetSpotUseCase;
use Illuminate\Http\JsonResponse;

class GetSpotController extends Controller
{
    /**
     * @param GetSpotUseCase $useCase
     * @return JsonResponse
     */
    public function __invoke(GetSpotUseCase $useCase): JsonResponse
    {
        return response()->json(['spots' => SpotResource::collection($useCase())]);
    }
}
