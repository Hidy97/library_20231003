<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/books/*',
        '/api/books',
        '/api/lendings/*/*/*',
<<<<<<< HEAD
        //'/api/users',
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        '/api/user_password/*'
    ];
}
