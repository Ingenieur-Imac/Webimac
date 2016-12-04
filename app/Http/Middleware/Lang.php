<?php

namespace Imac\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class lang
{
    /**
     * Handle an incoming request and set the language for her (from Session)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = Session::get('language',Config::get('app.locale')); //en will be the default language.
        App::setLocale($language);
        return $next($request);
    }
}
