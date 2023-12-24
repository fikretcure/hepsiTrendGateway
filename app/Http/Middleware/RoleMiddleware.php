<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class RoleMiddleware
{

    /**
     * @param Request $request
     * @param Closure $next
     * @param string $role
     * @return Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $roles = collect(json_decode(request()->header('X-USER-ROLES')));


        $role = collect(explode('-', $role));
        if ($roles->whereIn('id', $role)->isNotEmpty()) {
            return $next($request);
        }

        return response()->json('Permission Denied',403);
    }
}
