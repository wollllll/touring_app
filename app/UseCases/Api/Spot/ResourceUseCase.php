<?php

namespace App\UseCases\Api\Spot;

use App\Http\Controllers\Controller;
use App\Services\Api\Spot\ResourceService;
use Illuminate\Database\Eloquent\Collection;

class ResourceUseCase extends Controller
{
    /** @var ResourceService */
    private ResourceService $resourceService;

    /**
     * @param ResourceService $resourceService
     */
    public function __construct(ResourceService $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->resourceService->getSpotsWithUser();
    }
}
