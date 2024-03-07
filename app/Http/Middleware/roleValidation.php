<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class roleValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $page = $request->route()->getName();

        if(auth()->guard('caas')->user()->status->isPass && auth()->guard('caas')->user()->status->stages->stagesName == "Upgrading" && auth()->guard('caas')->user()->announcecheck()->isRoleActive){
            if($page == 'caas.role' && auth()->guard('caas')->user()->role->roles_id > 1){
                return redirect()->route('caas.fix.role');
            }elseif($page == 'caas.fix.role' && auth()->guard('caas')->user()->role->roles_id == 1){
                return redirect()->route('caas.role');
            }
        }else{
            return redirect()->route('caas.dashboard');
        }
        return $next($request);
    }
}
