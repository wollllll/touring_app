<?php

namespace App\UseCase\Spot;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\SpotRepository;
use Illuminate\Database\Eloquent\Collection;

class GetSpotUseCase extends Controller
{
    /** @var SpotRepository $spotRepository */
    private SpotRepository $spotRepository;

    /**
     * @param SpotRepository $spotRepository
     */
    public function __construct(SpotRepository $spotRepository)
    {
        $this->spotRepository = $spotRepository;
    }

    /**
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return $this->spotRepository->get();
    }
}
