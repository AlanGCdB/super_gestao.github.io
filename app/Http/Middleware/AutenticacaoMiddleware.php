<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_auteticacao, $perfil)
    {
        //Verificar se o usuario tem acesso a rota
        echo $metodo_auteticacao . ' - ' . $perfil . '<br>';

        if ($metodo_auteticacao == 'padrao') {
            echo 'Varificar o usuário e senha no banco de dados' . $perfil . '<br>';
        }
        if ($metodo_auteticacao == 'ldap') {
            echo 'Varificar o usuário e senha no AD' . $perfil . '<br>';
        }

        if ($perfil == 'visitante') {
            echo 'Exibir apenas alguns recursos' . '<br>';
        } else {
            echo 'Cerregar perfil do banco de dados';
        }

        // Verifica se o usuário possui acesso a rota
        if (false) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação');
        }
    }
}
