<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        // 判断是否登录
        if (!$request->session()->has('u_id')) {
            echo "<script>alert('请先登录');location.href='login'</script>";die;
        }
        return $next($request);
    }
}
