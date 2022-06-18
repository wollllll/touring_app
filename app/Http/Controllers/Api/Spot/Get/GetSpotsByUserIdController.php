<?php

namespace App\Http\Controllers\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\UseCases\Api\Spot\Get\GetByUserIdUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetSpotsByUserIdController extends Controller
{
    /** @var GetByUserIdUseCase  */
    private GetByUserIdUseCase $useCase;

    /**
     * @param GetByUserIdUseCase $useCase
     */
    public function __construct(GetByUserIdUseCase $useCase)
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
