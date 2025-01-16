<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckType
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->role === 'admin') {
            return $next($request);
        }

        return response()->json('У тебя недостаточно прав!', 400);
    }
}
