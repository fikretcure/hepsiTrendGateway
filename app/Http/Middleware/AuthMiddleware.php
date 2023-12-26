<?php

namespace App\Http\Middleware;

use App\Http\Services\AuthService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $auth = (new AuthService())->checkToken();

        if (isset($auth->original['data']['status'])) {
            $request->headers->set('X-USER-ID', $auth->original['data']['user']['id']);
            $request->headers->set('X-USER-EMAIL', $auth->original['data']['user']['email']);
            $request->headers->set('X-USER-NAME', $auth->original['data']['user']['name']);
            $request->headers->set('X-USER-ROLES', collect( $auth->original['data']['user']['roles']));
            return $next($request);
        }
        return $auth;
    }
}
