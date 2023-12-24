<?php

namespace App\Http\Controllers;

use App\Http\Services\ShoppingService;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class FileController extends Controller
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
    public function upload(): JsonResponse
    {
        return $this->shoppingService->send();
    }
}
