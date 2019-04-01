<?php

namespace Rockbuzz\LaraHttps;

use Closure;

class ForceSSL
{
    public function handle($request, Closure $next)
    {
        if (! $request->secure() && config('https.app_env') == 'production') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
