<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\UseCases\Api\Auth\LogoutUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * @param Request $request
     * @param LogoutUseCase $useCase
     * @return JsonResponse
     */
    public function __invoke(Request $request, LogoutUseCase $useCase): JsonResponse
    {
        return response()->json($useCase($request));
    }
}
