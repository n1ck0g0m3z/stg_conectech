<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAdministrator
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
        $user = $request->user();
        
        if($user){
            if($user->isAdminManager()){
                return $next($request);
            }
        }
        //abort(404,'No Way');
        return redirect('/');
    }
}
