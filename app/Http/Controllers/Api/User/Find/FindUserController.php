<?php

namespace App\Http\Controllers\Api\User\Find;

use App\Http\Controllers\Controller;
use App\UseCases\Api\User\Find\FindUserUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FindUserController extends Controller
{
    /** @var FindUserUseCase  */
    private FindUserUseCase $useCase;

    /**
     * @param FindUserUseCase $useCase
     */
    public function __construct(FindUserUseCase $useCase)
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
