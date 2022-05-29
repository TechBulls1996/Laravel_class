<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
       

    }

    public function list (Request $req, $id,$name) {
        
        echo $id." ".$name;
    }
}
