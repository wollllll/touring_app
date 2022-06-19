<?php

namespace App\Repositories\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class BaseRepository extends Controller
{
    /** @var User  */
    protected User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
