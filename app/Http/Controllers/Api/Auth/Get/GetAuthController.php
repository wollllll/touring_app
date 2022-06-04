<?php

namespace App\Http\Controllers\Api\Auth\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class GetAuthController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return response()->json(['auth' => auth()->user()]);
    }
}
