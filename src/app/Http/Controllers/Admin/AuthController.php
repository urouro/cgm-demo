<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    public function __construct(\Illuminate\Contracts\Auth\Guard $auth, \Illuminate\Contracts\Routing\Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    // --- Override AuthenticatesAndRegisterUsers

    public function getLogin()
    {
        return view('admin.auth.login');
    }
}
