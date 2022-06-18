<?php

namespace App\UseCases\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutUseCase extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function __invoke(Request $request): array
    {
        auth()->guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return [
            'message' => 'ログアウトしました！'
        ];
    }
}
