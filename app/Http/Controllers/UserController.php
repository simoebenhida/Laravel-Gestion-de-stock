<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class UserController extends Controller
{
    public function get_login()
    {
      return view('auth.login');
    }
    public function post_login(Request $request)
    {
      $this->validate($request,[
        'pseudo' => 'required|unique:users',
        'password' => 'required'
      ]);
      if(Auth::attempt(['pseudo'=> $request->pseudo,'password' => $request->password]))
      {
        return redirect()->route('home.dashboard');
      }
      else {
        Session::flash('failed','Mot de passe ou pseudo Incorect');
        return redirect()->route('login');
      }
    }
    public function get_create_account()
    {
      return view('auth.register');
    }
    public function create_account(Request $request)
    {
      $this->validate($request,[
        'pseudo' => 'required|unique:users',
        'password' => 'required|min:6|confirmed'
      ]);
      $user = new User();
      $user->pseudo = $request->pseudo;
      $user->password = bcrypt($request->password);
      $user->admin = $request->admin;
      $user->save();
      return redirect()->route('home.dashboard');
    }
    public function logout()
    {
      Auth::logout();
      return redirect()->route('login');
    }
}
