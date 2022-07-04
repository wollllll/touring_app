<?php

namespace App\UseCases\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUseCase extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function __invoke(Request $request): array
    {
        $request->authenticate();

        $request->session()->regenerate();

        return [
            'auth' => auth()->user(),
            'message' => 'ログインしました！'
        ];
    }
}
