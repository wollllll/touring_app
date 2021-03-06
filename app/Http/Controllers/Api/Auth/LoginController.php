<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\UseCases\Api\Auth\LoginUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @param Request $request
     * @param LoginUseCase $useCase
     * @return JsonResponse
     */
    public function __invoke(LoginRequest $request, LoginUseCase $useCase): JsonResponse
    {
        return response()->json($useCase($request));
    }
}
