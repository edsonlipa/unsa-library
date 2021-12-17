<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\AccesoGoogle;
use Illuminate\Support\Facades\Auth;
use Exception;

class LogInWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {        
        return Socialite::driver('google')->with(['hd' => 'unsa.edu.pe'])->redirect();
    }

    public function handleGoogleCallback()
    {
        try {      
            $user = Socialite::driver('google')->user();          
            
            // $operador = \DB::table('operadores')
            // ->join('users','users.id','=','operadores.id')
            // ->where('users.email', $user->email)->first();     
    
            
            // if (!$operador) { // si no es personal de grados
            //     \Session::flash('errorLoginMessage', "Lo sentimos, esta aplicación es solo para personal registrado en el Sistema de Admisión");
            //     return redirect()->to('acceso-admin');
            // }
            
            $finduser = User::where('google_id', $user->id)->first();           
       
            if ($finduser) {       
                Auth::login($finduser);
                return redirect()->intended('dashboard');       
            } 
            else {      
                
                $updatedUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'google_id' => $user->id,
					]
                );
                
                Auth::login($updatedUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            \Log::warning('LoginWithGoogleController@handleGoogleCallback, Detalle: "'.$e->getMessage().'" on file '.$e->getFile().':'.$e->getLine());
        }
    }
}
