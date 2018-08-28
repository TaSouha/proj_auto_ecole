<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;
class RedirectIfNotAdmin 
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'admin')
	{
	    if (!Auth::guard($guard)->check()) {
             return redirect('/admin/login');    	
	    }
      $id=Auth::guard('admin')->user()->id;
             $type=DB::table('teamwork')->where('id_Personne',$id)->value('Type');
             $candidat=DB::table('candidat')->where('id_Personne',$id)->count();
if($type == 'administrateur'){
return redirect('/admin/Accueil/'. $id);
}
	
	if($type=='moniteur'){
return redirect('/');
	}   

	if($type=='formateur'){
return redirect('/');
	}  
	if($candidat != 0){
return redirect('/2');
	}  
	}
}