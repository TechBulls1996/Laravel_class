<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
  public function login(Request $req){

       $credentials = $req->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
       ]);

       if (Auth::attempt($credentials)) {
          $req->session()->regenerate();
          //store user session
          $user = User::where(["email" => $req->email])->first(); 
          session(["userInfo" => $user]);
          return redirect()->intended('dashboard');
       }
      
       return back()->withErrors([
         'email' => 'The provided credentials do not match our records.',
       ])->withInput($req->all());       
  }

  public function register(Request $req){
          
   
  }

  public function logout(Request $req){
   Auth::logout();
   $req->session()->invalidate();
   $req->session()->regenerateToken();
   return redirect()->route('login');      
     
  }
  

}
