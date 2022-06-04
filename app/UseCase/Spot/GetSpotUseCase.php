<?php

namespace App\UseCase\Spot;

use App\Http\Controllers\Controller;
use App\Repositories\Spot\SpotRepository;

class GetSpotUseCase extends Controller
{
    /** @var SpotRepository $spotRepository */
    private SpotRepository $spotRepository;

    public function __construct(SpotRepository $spotRepository)
    {
        $this->spotRepository = $spotRepository;
    }

    /**
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'spots' => $this->spotRepository->get()
        ];
    }
}
