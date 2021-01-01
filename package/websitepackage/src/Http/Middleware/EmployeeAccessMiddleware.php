<?php

namespace TeamBravo\WebSitepkg\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployeeAccessMiddleware
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
        $employeeType = "SiteAdmin";
        if($employeeType != "SiteAdmin"){
            abort(403,"Unauthorized! Access~");
        }
        return $next($request);
    }
}
