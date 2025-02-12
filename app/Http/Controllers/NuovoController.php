<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//hash serve per nascondere la passowrd, auth serve per la classe di autenticazione
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class NuovoController extends Controller {
    
    
    
    function reindirizzaHome() {
        return view('welcome');
    }

    function reindirizzaRegistrazione() {
        return view('registrati');
    }

    function reindirizzaLogin() {
        return view('login');
    }
    //-----------------------------Registrazione
    

    public function validazioneRegistrazioneUtente(Request $request) {
        $validate = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'eta'=> 'required|integer|min:18|max:100',
            'email' => 'required|email|max:255',
            'password'=>'required|string|min:5|confirmed',
        ]);

        //scrivo nel db la riga fornita dal form attraverso il metodo POST
        //creo l'utente attraverso il modello gia esistente, i nomi sono dati in base ai name del form
        $user = User::create([
            'nome' => $validate['nome'],
            'cognome' => $validate['cognome'],
            'eta' => $validate['eta'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']), //nasconde la password nel db.
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        //potrei fare login automatico
        # Auth::login($user);


        //home si intende la rinominazione di /
        return redirect()->route('home')->with('success', 'Registrazione avvenuta con successo! ');
    }

    public function validazioneLogin(Request $request) {
        
        //requisiti fondamentali per il login cioe che siano entrambi required
        $credenziali = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credenziali)) {
            $request->session()->regenerate(); //rigenera la sessione 

            return redirect()->intended('/')->with('success', 'Login effettuato con successo! ');
        }
        else {
            //in caso non riusciamo a connetterci ci manda alla pagina precedente e restituisce gli errori
            return back()->withErrors([
                'email' => 'Le credenziali fornite non sono corrette. ',
            ])->onlyInput('email');
        }
    }
}
