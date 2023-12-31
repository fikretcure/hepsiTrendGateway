<?php

namespace App\Http\Controllers;


use App\Enums\RolesEnum;
use App\Http\Services\IyzicoService;
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
     * @var IyzicoService
     */
    public IyzicoService $iyzicoService;

    /**
     *
     */
    public function __construct()
    {
        $this->middleware('role:' . RolesEnum::ADMIN->value)->only(['store', 'update', 'destroy']);
        $this->shoppingService = new ShoppingService();
        $this->iyzicoService = new IyzicoService();
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


    /**
     * @return JsonResponse
     */
    public function payment(): JsonResponse
    {
        return $this->shoppingService->send(method: null, path: 'api/basket/payment', file_path: null);
    }

    /**
     * @return JsonResponse
     */
    public function iyzicoPayment(): JsonResponse
    {
        return $this->iyzicoService->send(method: 'post', path: 'api/payment', file_path: null);
    }

    /**
     * @return JsonResponse
     */
    public function changeSuccesful(): JsonResponse
    {
        return $this->shoppingService->send();
    }
}
