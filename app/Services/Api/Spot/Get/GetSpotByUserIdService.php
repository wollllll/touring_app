<?php

namespace App\Services\Api\Spot\Get;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\Get\GetSpotByUserIdRepository;
use Illuminate\Database\Eloquent\Collection;

class GetSpotByUserIdService extends Controller
{
    /** @var GetSpotByUserIdRepository  */
    private GetSpotByUserIdRepository $repository;

    /**
     * @param GetSpotByUserIdRepository $repository
     */
    public function __construct(GetSpotByUserIdRepository $repository)
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
