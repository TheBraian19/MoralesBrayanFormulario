<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function validar(Request $request){
         $user = $request->input('user');
         $pass = $request->input('pass');

         if($user === 'MoralesBrayan' && $pass === '12345'){
             $url='orden.good';

         }else{
             $url='orden.bad';
         }
         return view($url,[]);
  
    }
    public function login(){
        return view('orden.formulario');
    }
    
}
