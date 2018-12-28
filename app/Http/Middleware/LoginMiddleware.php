<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginMiddleware
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
      if (Auth::check())
       {
           $user = Auth::user();
           // nếu level =1 (admin), level = 10 (admin) thì cho qua.
           if ($user->level == 10 || $user->level == 1 )
           {
               return $next($request);
           }
           else
           {
               Auth::logout();
               return redirect()->route('admin.getLogin');
           }
        } else
           return redirect('/admin/login');

   }
}
