<?php

namespace App\Http\Middleware;

use Closure;

class Apikey
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
        $token=$request->header('x-api-key');
        if($token !='abcdef'){
            return response()->json(['message'=>'Api Key Not Found'], 401);
        }
        return $next($request);
    }
}
