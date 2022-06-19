<?php

namespace App\Http\Controllers\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\UseCases\Api\Spot\Get\GetSpotByUserIdUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetSpotByUserIdController extends Controller
{
    /** @var GetSpotByUserIdUseCase  */
    private GetSpotByUserIdUseCase $useCase;

    /**
     * @param GetSpotByUserIdUseCase $useCase
     */
    public function __construct(GetSpotByUserIdUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json($this->useCase->handle($request->query()));
    }
}
