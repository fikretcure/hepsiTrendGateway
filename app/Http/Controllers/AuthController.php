<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthService;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class AuthController extends Controller
{
    /**
     * @var AuthService
     */
    public AuthService $authService;

    /**
     *
     */
    public function __construct()
    {
        $this->authService = new AuthService();
    }

    /**
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        return $this->authService->login();
    }

    public function checkToken(): JsonResponse
    {
        return $this->authService->checkToken();
    }
}
