<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class teacherCheck
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
        $user = User::find( Auth::user()->id );
        if($user->hasRole('teacher'))
        return $next($request);
        else
        return redirect()->route('site.index'); 
    }
}
