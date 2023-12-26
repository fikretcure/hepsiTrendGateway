<?php

namespace App\Http\Controllers;

use App\Http\Services\InvoiceNotService;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class NotificationController extends Controller
{
    /**
     * @var InvoiceNotService
     */
    public InvoiceNotService $invoiceNotService;

    /**
     *
     */
    public function __construct()
    {
        $this->invoiceNotService = new InvoiceNotService();
    }


    /**
     * @return JsonResponse
     */
    public function failedService(): JsonResponse
    {
        return $this->invoiceNotService->send();
    }
}
