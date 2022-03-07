<?php

// Namespacing.
namespace App\Http\Middleware;
use Closure;

// Facades.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
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
        if (session()->has('locale') && array_key_exists(session()->get('locale'), config('cms.common.settings.app_locales'))) {
            App::setLocale(session()->get('locale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale('nl');
        }
        return $next($request);
    }
}
