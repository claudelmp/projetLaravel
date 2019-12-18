<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Email;

class UsersController extends Controller {

    public function create() {
        return view('infos');
    }

    public function store(UsersRequest $request) {
        $email = new Email(); //instancie le modèle 
        $email->email = $request->email;
          $email->nom = $request->nom;
        $email->save(); //enregistre la ligne
        //return view('confirm')->with('nom', $request->nom);
        return view('confirm',compact('request'));
    }

}
