<?php

namespace App\Http\Middleware;

use Closure;
use App\Job;
use Auth;
use Laracasts\Flash\Flash;
use Session;
use Redirect;
class EmployeesAcl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  $permission - from routes.php to determine what type of check we need to make
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //EMPLOYEE SWITCH, ONLY ROLE 1,2,3 CAN GET IN
        switch ((Auth::user()->role)) {
            case 1:
            case 2:
            case 3:
                return $next($request);
                break;
            
            default:
                Flash::warning('You do not have authorization to view this page');
                return Redirect::route('home_index'); 
                break;
        }
    }
}
