<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/dashboard';
    public function redirectTo()
    {
        //$manager = Auth::user()->role_id = 1;
        //$owner = Auth::user()->role_id = 2;
        if(Auth::check()) {
            return '/modelzadashi'; // owner of software
        }else
        {
            return '/login';
        }
    }
    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
 
        $this->username = $this->findUsername();
    }
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'username' : 'username';
        //$fieldType = $login ? 'username' : 'username';
        request()->merge([$fieldType => $login]);
        //return Auth::user();
        return $fieldType;
    }
    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
}
