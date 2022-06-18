<?php

namespace App\Services\Api\Spot;

use App\Http\Controllers\Controller;
use App\Models\Spot;
use App\Repositories\Spot\SpotRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class SpotService extends Controller
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
    public function get(): Collection
    {
        return $this->spotRepository->get();
    }

    /**
     * @param array $inputs
     * @return Spot
     * @throws \Exception
     */
    public function store(array $inputs): Spot
    {
        DB::beginTransaction();

        try {
            $spot = $this->spotRepository->store($inputs);

            DB::commit();

            return $spot;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * @param Spot $spot
     * @param array $inputs
     * @return Spot
     * @throws \Exception
     */
    public function update(Spot $spot, array $inputs): Spot
    {
        DB::beginTransaction();

        try {
            $this->spotRepository->update($spot, $inputs);

            DB::commit();

            return $spot;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
