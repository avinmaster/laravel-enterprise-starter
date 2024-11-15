<?php

namespace App\Http\Middleware\Role;

use App\Models\Role;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use Closure;
use Illuminate\Http\Request;

class IsOwner
{
    public function __construct(
        protected UserReadRepositoryInterface $userReadRepository
    ) {}

    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->hasRole(Role::ROLE_OWNER)) {
            return $next($request);
        }

        return response('Unauthorized', 401);
    }
}
