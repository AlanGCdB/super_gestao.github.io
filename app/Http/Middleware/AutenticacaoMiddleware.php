<?php

namespace App\Http\Middleware;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function handle($request, \Closure $next, $metodo_auteticacao, $perfil)
    {
        session_start();
        if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
            // code...
            return $next($request);
        } else {
            // code...
            return redirect()->route('site.login', ['erro' => 2]);
        }
    }
}
