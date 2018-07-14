<?php

namespace App\Http\Middleware;

use Closure;

class Wechat
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
        if (! strpos($_SERVER['HTTP_USER_AGENT'],'MicroMessenger') !== false ) {
            abort('401' , '请使用微信访问');
        }

        return $next($request);
    }
}
