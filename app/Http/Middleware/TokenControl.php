<?php

namespace App\Http\Middleware;

use App\Http\Responses\Response;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class TokenControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null($request->header('_token'))) {
            return response()->json(Response::EmptyTokenResponse(), 401);
        } else if ($request->header('_token') != env('TOKEN')) {
            return response()->json(Response::WrongTokenResponse(), 401);
        } else {
            return $next($request);
        }
    }
}
