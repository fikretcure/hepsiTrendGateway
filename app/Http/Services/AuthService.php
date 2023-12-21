<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

/**
 *
 */
class AuthService extends Service
{

    /**
     *
     */
    public function __construct()
    {
        $this->baseUrl = env('AUTH_BASE_URL');
    }

    /**
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        return $this->send(method: 'post');
    }

    /**
     * @return JsonResponse
     */
    public function checkToken(): JsonResponse
    {
        return $this->send(method: 'post');
    }

}
