<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Redirect;
use Cache;
use Cookie;
class AccesoController extends Controller
{
    public function validar(Request $request)
    {
    	
        $usuario=$request->usuario;
        $password=$request->password;

        $resp=Usuario::where('nick', '=',$usuario)
        ->where('password','=', $password)
        ->get();
       

        // return $resp;
        if (count($resp)>0){

             $user =$resp[0]->nombres.' '.$resp[0]->apellidos;

            Session::put('usuario',$user);
            Session::put('rol',$resp[0]->rol->rol);

            if($resp[0]->rol->rol=="Administrador")
              return Redirect::to('mod');
         
            }

            else
                return Redirect::to('error');
            
    }

    public function salir(){
        Session::flush();
        Session::reflash();
        Cache::flush();
        Cookie::forget('laravel_session');
        unset($_COOKIE);
        unset($_SESSION);

        return Redirect::to('/');
    }
}
