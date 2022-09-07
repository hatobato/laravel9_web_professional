<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SampleMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        // 前に処理を挟みたい場合はここに記述
        return $next($request);
        // 後に処理を挟みたい場合はここに記述
    }
}
