<?php

namespace App\Services\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\GetSpotsByUserIdRepository;
use Illuminate\Database\Eloquent\Collection;

class GetSpotsByUserIdService extends Controller
{
    /** @var GetSpotsByUserIdRepository  */
    private GetSpotsByUserIdRepository $repository;

    /**
     * @param GetSpotsByUserIdRepository $repository
     */
    public function __construct(GetSpotsByUserIdRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $queries
     * @return Collection
     */
    public function handle(array $queries): Collection
    {
        return $this->repository->getSpotsByUserId($queries);
    }
}
