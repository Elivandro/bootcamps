<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'https://projeto-bonsai.herokuapp.com/*',
        "http://projeto-bonsai.herokuapp.com/*"
    ];
}
