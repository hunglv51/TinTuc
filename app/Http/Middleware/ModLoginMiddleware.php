<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\AuthTraits\CanManageTrait;
class ModLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    use CanManageTrait;
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {    
            $user = Auth::user();
            if($user->IsModOrAdmin())
                return $next($request);
            else 
                return redirect('admin/error/unauthorized');
        }
        else
            return redirect('admin/dangnhap');
    }
}
