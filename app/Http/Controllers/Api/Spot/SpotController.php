<?php

namespace App\Http\Controllers\Api\Spot;

use App\Http\Controllers\Controller;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
