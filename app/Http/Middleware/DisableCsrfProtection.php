<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableCsrfProtection
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
        // You can return $next($request) to allow normal CSRF protection.
        return $next($request);
    }
}
