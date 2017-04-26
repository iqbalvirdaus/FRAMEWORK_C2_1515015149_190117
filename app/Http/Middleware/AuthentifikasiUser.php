<?php
/*AuthentifikasiUser*/
namespace App\Http\Middleware;

use Closure;

class AuthentifikasiUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $auth;
    public function __construct()
    {
        # code...
        $this->auth = app('auth');
    }
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            # code...
            return $next($request);
        }
        return redirect('login')->withErrors('Silahkan Login terlebih dahulu');
    }
}
