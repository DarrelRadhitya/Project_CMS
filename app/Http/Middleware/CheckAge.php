<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        if ($request->age <= 13) {
            return response('Maaf, umur Anda belum cukup untuk menyewa PlayStation', 403);
        }

        return $next($request);
    }
}
