<?php

namespace App\Http\Middleware\User;

use App\Constants\User\UserConstants;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use Closure;
use Illuminate\Http\Request;

class IsActiveUser
{
    public function __construct(
        protected UserReadRepositoryInterface $userReadRepository
    ) {}

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user->status === UserConstants::STATUS_ACTIVE) {
            return $next($request);
        }

        return response('Unauthorized', 401);
    }
}
