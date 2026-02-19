<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;

class AdminAuthenticate extends Authenticate
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login'); // route khusus admin
        }
    }
}
