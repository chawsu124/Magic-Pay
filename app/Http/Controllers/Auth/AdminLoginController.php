<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// Declare Auth beacuse using Auth
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
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

    use AuthenticatesUsers;// this is main login working

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //default
    //protected $redirectTo = '/admin';
    protected $redirectTo = RouteServiceProvider::ADMINPANEL; // if login correct,Goto ADMINPANEL ,redirect to url('/admin')

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest:admin_user')->except('logout');
    }

    // custom copy from vendor->laravel->ui->auth-backend->AuthenticatedUsers.php file
    protected function guard()
    {
        return Auth::guard('admin_user');
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }
}


