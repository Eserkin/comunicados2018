<?php

namespace Comunicados\Http\Controllers\Auth;

use Comunicados\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Comunicados\School;
use DB;
use Auth;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'dni';
    }

    public function redirectPath()
    {
      switch(Auth::user()->tipo)
        {
            case 'admin':
                return  '/admin';
                break;
            case 'tutor':
                return '/tutor';
                break;
            case 'alumno':
                return '/alumno';
                break;
            case 'personal':
                return '/personal';
                break;
        }

    }

}
