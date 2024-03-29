<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class BeautyManagerMiddleware
{
    /**
     * 
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
            if (Auth::user() &&  Auth::user()->role == 'beauty_manager') {
                return $next($request);
            }
        
            return redirect('/login');
        }
        
    /**
     * 
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return bool
     */
    protected function userIsBeautyManager($user)
    {
       
        return $user->hasRole('beauty_manager'); 
    }
}
