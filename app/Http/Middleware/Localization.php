<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Closure;

class Localization 
{
     
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }
    
}

?>