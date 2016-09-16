<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class IsAdmin
{

    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       //dd($this->auth->user());
        if( ! $this->auth->user()->isAdmin()){ //si el usuario no es administrador

            $this->auth->logout();//si no es admin lo desconecto y lo redirijo al login

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }
        //retornar un msj que indique por que fue redireccionado
        return $next($request);
    }
}
