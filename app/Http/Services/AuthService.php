<?php

namespace App\Http\Services;

class AuthService extends Service
{



    public function __construct()
    {
        $this->baseUrl = env('AUTH_BASE_URL');
    }


    public function login()
    {

        return $this->send(method: 'post');
    }

}
