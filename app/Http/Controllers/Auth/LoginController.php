<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::guard('patient')->check()) {
            $this->redirectTo = '/patient';
        }
        if (Auth::guard('admin')->check()) {
            $this->redirectTo = '/admin';
        }
        if (Auth::guard('donor')->check()) {
            $this->redirectTo = '/donor';
        }

        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
