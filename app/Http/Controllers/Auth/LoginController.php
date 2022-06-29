<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Reseller;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
  use AuthenticatesUsers;

  protected $redirectTo = RouteServiceProvider::DASHBOARD;

  public function getLogin()
  {
    return view('auth.login');
  }

  public function postLogin(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'password' => 'required'
    ]);
 
      // Validate the form data
      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('reseller')->attempt(['name' => $request->name, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/reseller/dashboard');
    } else if (Auth::guard('user')->attempt(['name' => $request->name, 'password' => $request->password])) {
      return redirect()->intended('/admin/dashboard');
    } else{
        return redirect()->back()->with('error','Akun Yang Anda Masukan Invalid, Silahkan Coba Lagi');
    }

    // $this->validate($request, [
    //   'name' => 'required',
    //   'password' => 'required'
    // ]);

  }

  public function username()
  {
      return 'name';
  }
  public function __construct()
  {
     $this->middleware('guest')->except('logout');
     
  }

  public function logout()
  {
    if (Auth::guard('reseller')->check()) {
      Auth::guard('reseller')->logout();
    } elseif (Auth::guard('user')->check()) {
      Auth::guard('user')->logout();
    }
    // else {
    //   return redirect()->back();
    // }
    
    return redirect('/login');

  }
}
