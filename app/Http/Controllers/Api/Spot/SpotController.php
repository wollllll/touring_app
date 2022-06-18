<?php

namespace App\Http\Controllers\Api\Spot;

use App\Http\Controllers\Controller;
use App\Models\Spot;
use App\UseCases\Api\Spot\SpotUseCase;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    /** @var SpotUseCase $useCase */
    private SpotUseCase $useCase;

    public function __construct(SpotUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->useCase->index());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->useCase->store($request->input()));
    }

    /**
     * @param Spot $spot
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function update(Spot $spot, Request $request): JsonResponse
    {
        return response()->json($this->useCase->update($spot, $request->input()));
    }

    /**
     * @param Spot $spot
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Spot $spot): JsonResponse
    {
        return response()->json($this->useCase->delete($spot));
    }
}
