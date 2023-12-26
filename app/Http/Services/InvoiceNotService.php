<?php

namespace App\Http\Services;


/**
 *
 */
class InvoiceNotService extends Service
{

    /**
     *
     */
    public function __construct()
    {
        $this->baseUrl = env('INVOICE_NOT_BASE_URL');
    }
}
