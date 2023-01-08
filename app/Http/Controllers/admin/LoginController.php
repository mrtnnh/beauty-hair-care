<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

  protected $redirectTo = '/admin/home';

  public function __construct()
  {
    $this->middleware('guest:admin')->except('logout');
  }

  protected function guard()
  {
    return Auth::guard('admin');
  }

  public function showlogin(){
    return view('admin.login');
  }

  public function logout(Request $request)
  {
    $this->guard('admin')->logout();
    $request->session()->invalidate();
    return redirect('/admin/login');
  }


  public function validator(array $data)
  {
    return Validator::make($data, [
      'email' => ['required', 'string', 'email', 'max:255'],
      'password' => ['required', 'string', 'min:8'],
    ]);
  }
}
