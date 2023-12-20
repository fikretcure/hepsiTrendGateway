<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

/**
 *
 */
class Service
{
    /**
     * @var
     */
    public $baseUrl;

    /**
     * @param string $method
     * @param $path
     * @return JsonResponse
     */
    public function send(string $method = 'get', $path = null): JsonResponse
    {
        $path = $path ?? request()->path();
        $response = Http::accept('application/json')->{$method}($this->baseUrl . $path);
        return response()->json($response->json(), $response->status());

    }
}
