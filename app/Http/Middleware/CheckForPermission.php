<?php

namespace App\Http\Middleware;

use Closure;

class CheckForPermission
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
        $actionName = $request->route()->getActionName();
        list($controller, $method) = explode('@', $actionName);
        $controller = str_replace(['App\\Http\\Controllers\\','Controller'], '',$controller);


        $permissionMap = [
            'create' => ['create', 'store'],
            'update' => ['edit', 'update'],
            'delete' => ['destroy', 'restore', 'forceDestroy'],
            'read'   => ['index', 'show']
        ];


//        foreach ($permissionMap as $permissions => $methods) {
//            //if the method exist in permission map
//            if(in_array($method,$methods))
//            {
//                //dd('C: '.$controller.' M: '.$method);
//
//            }
//        }
        return $next($request);
    }
}
