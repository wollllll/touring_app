<?php

namespace App\UseCases\Api\Spot;

use App\Http\Controllers\Controller;
use App\Http\Resources\Spot\SpotResource;
use App\Services\Api\Spot\SpotService;

class SpotUseCase extends Controller
{
    /** @var SpotService */
    private SpotService $spotService;

    /**
     * @param SpotService $spotService
     */
    public function __construct(SpotService $spotService)
    {
        $this->spotService = $spotService;
    }

    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'spots' => SpotResource::collection($this->spotService->get())
        ];
    }

    /**
     * @param array $inputs
     * @return array
     * @throws \Exception
     */
    public function store(array $inputs): array
    {
        return [
            'spot' => new SpotResource($this->spotService->store($inputs))
        ];
    }
}
