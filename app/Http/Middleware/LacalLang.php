<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class LacalLang
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', Config::get('app.locale'));
        App::setlocale($locale);
        return $next($request);
    }
}
