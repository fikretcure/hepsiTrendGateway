<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

/**
 *
 */
class ShoppingService extends Service
{

    /**
     *
     */
    public function __construct()
    {
        $this->baseUrl = env('SHOPPING_BASE_URL');
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->send();
    }

    public function store(): JsonResponse
    {
        return $this->send();
    }

    public function show(): JsonResponse
    {
        return $this->send();
    }

    public function update(): JsonResponse
    {
        return $this->send();
    }

    public function destroy(): JsonResponse
    {
        return $this->send();
    }
}
