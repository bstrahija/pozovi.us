<?php namespace App\Http\Middleware;

use Config, Closure, Route;
use Illuminate\Contracts\Auth\Guard;

class SetSocialCallback {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get provider
        $provider = Route::current()->parameter('provider');

        // Set route for callback
        if ($route = config("services.$provider.redirect_route"))
        {
            Config::set("services.$provider.redirect", route($route, $provider));
        }

        return $next($request);
    }

}
