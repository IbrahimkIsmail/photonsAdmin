<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationChecker
{

    public function handle(Request $request, Closure $next)
    {
        $lang = session()->get('lang', 'en');

        if ($lang == 'ar') {
            session(['direction' => 'rtl']);
            session(['direction_link' => '.rtl']);
        } else {
            session(['direction' => 'ltr']);
            session(['direction_link' => '']);

        }
        App::setLocale($lang);
        return $next($request);
    }
}
