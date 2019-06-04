<?php
namespace App\Http\Middleware;




class Authenticate{
	public function handle($request,Closure $next){
		dump('exec authenticate middleware');
		return $next($request);
	}
	
}