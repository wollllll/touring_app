<?php

namespace App\Services\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\DB;

class UserService extends Controller
{
    /** @var UserRepository $userRepository */
    private UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param User $user
     * @param array $inputs
     * @return User
     * @throws \Exception
     */
    public function update(User $user, array $inputs): User
    {
        DB::beginTransaction();

        try {
            $this->userRepository->update($user, $inputs);

            DB::commit();

            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
