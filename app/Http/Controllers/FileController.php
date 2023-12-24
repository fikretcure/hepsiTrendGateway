<?php

namespace App\Http\Controllers;

use App\Http\Services\ShoppingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param Request $request
     * @return JsonResponse
     */
    public function upload(Request $request): JsonResponse
    {
        $path = $request->file('file')->store('public/file');
        return $this->shoppingService->send(method: null, path: null, file_path: storage_path().'/app/'.$path);
    }
}
