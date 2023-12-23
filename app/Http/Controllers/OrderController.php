<?php

namespace App\Http\Controllers;


use App\Http\Services\ShoppingService;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class OrderController extends Controller
{

    /**
     * @var ShoppingService
     */
    public ShoppingService $shoppingService;

    /**
     *
     */
    public function __construct()
    {
        $this->shoppingService = new ShoppingService();
    }


    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function store(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function show(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        return $this->shoppingService->send();
    }

    /**
     * @return JsonResponse
     */
    public function basket(): JsonResponse
    {
        return $this->shoppingService->send();
    }

    /**
     * @return JsonResponse
     */
    public function increasingQuantityProduct(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function decrementQuantityProduct(): JsonResponse
    {
        return $this->shoppingService->send();
    }


    /**
     * @return JsonResponse
     */
    public function removeProduct(): JsonResponse
    {
        return $this->shoppingService->send();
    }
}
