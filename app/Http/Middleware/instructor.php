<?php

namespace App\Http\Middleware;

use Closure;

class instructor
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
if(auth()->user()->isAdmin == 2){
return $next($request);
}
return redirect('home')->with('error','You have not instructor access');
}
Now, register this rou
}
