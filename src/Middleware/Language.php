<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Language
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
        if ($request->is('admin*') || $request->is('login') || $request->is('register') || $request->is('password/reset')) {
            return $next($request);
        }

        if (config('qwertcms.use_multilang')) {
            $locale = $request->segment(1);
            if (!array_key_exists($locale, config('qwertcms.locales'))) {
                $segments = $request->segments();
                array_unshift($segments, config('app.fallback_locale'));

                return redirect(implode('/', $segments));
            }

            App::setLocale($locale);
        }

        return $next($request);
    }
}
