<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

/**
 *
 */
class IyzicoService extends Service
{

    /**
     *
     */
    public function __construct()
    {
        $this->baseUrl = env('IYZICO_BASE_URL');
    }
}
