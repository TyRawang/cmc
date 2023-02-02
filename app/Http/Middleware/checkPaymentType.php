<?php

namespace App\Http\Middleware;

use Closure;

class checkPaymentType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->payment_status != 'Success') {
            return response()->json('Please logi first');
        }


        return $next($request);
    }
}

