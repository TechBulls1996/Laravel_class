<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
  public function login(Request $req){
       $email = $req->email;
       $pass = $req->password;
      
       $user = User::where(["email" => $email])->first(); 

       if($user && Hash::check($pass, $user->password)){
          $req->session()->flash('login_status', "true");
       }else{
          $req->session()->flash('login_status', "false");
       };

       return redirect()->route('login');
       
  }
  
}
