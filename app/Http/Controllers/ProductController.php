<?php

namespace App\Http\Controllers;


use App\Http\Services\ShoppingService;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class ProductController extends Controller
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
        return $this->shoppingService->index();
    }


    /**
     * @return JsonResponse
     */
    public function store(): JsonResponse
    {
        return $this->shoppingService->store();
    }


    /**
     * @return JsonResponse
     */
    public function show(): JsonResponse
    {
        return $this->shoppingService->show();
    }


    /**
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
        return $this->shoppingService->update();
    }


    /**
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        return $this->shoppingService->destroy();
    }
}
