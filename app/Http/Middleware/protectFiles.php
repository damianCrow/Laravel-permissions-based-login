<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;  
use App\User;
use App\Content;
use Session;
use Closure;

class protectFiles
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
      
    if(Auth::user()->isAllowedAccess($request -> folderName) || Auth::user()->isAdmin()) {

      return $next($request);
    }
    else {

      Session::flash('message', 'You do not have permission to access this file!');
      return redirect() -> back();  
    }
  }
}
