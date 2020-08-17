<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        $locales = ['en', 'ru', 'uz', 'oz'];
        $lang = $request->input('_lang');

        if (in_array($lang, $locales)) {
            app('translator')->setLocale($lang);
        }
        
        return $next($request);
    }
}
