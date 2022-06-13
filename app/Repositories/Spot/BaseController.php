<?php

namespace App\Repositories\Spot;

use App\Http\Controllers\Controller;
use App\Models\Spot;

class BaseController extends Controller
{
    /** @var Spot  */
    protected Spot $spot;

    /**
     * @param Spot $spot
     */
    public function __construct(Spot $spot)
    {
        $this->spot = $spot;
    }
}
