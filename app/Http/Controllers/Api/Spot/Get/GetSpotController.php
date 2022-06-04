<?php

namespace App\Http\Controllers\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\UseCase\Spot\GetSpotUseCase;
use Illuminate\Http\Request;

class GetSpotController extends Controller
{
    /**
     * @param GetSpotUseCase $useCase
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(GetSpotUseCase $useCase): \Illuminate\Http\JsonResponse
    {
        return response()->json($useCase());
    }
}
