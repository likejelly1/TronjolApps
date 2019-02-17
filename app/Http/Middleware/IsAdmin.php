<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class IsAdmin
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
        $user = User::where('username', $request->username)->first();
        if ($user->admin == 1) {
            return redirect('/admin/dashboard');
        }elseif($user->admin == 0 ){
            return redirect('/home');
        } 
        return $next($request);
    }
}
