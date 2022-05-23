<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __invoke(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        if (auth()->attempt($credentials)) {
            $token = $request->user()->createToken('auth');

            return response()->json([
                'auth' => auth()->user(),
                'api_token' => $token->plainTextToken
            ], 200);
        }

        return response()->json(['api_token' => null], 401);
    }
}
