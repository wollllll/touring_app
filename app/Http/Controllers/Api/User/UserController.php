<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\UseCases\Api\User\UserUseCase;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserUseCase $useCase */
    private UserUseCase $useCase;

    public function __construct(UserUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * @param User $user
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function update(User $user, Request $request): JsonResponse
    {
        return response()->json($this->useCase->update($user, $request->input()));
    }
}
