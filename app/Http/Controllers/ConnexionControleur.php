<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionControleur extends Controller
{
    public function connexion()
    {
        return view('connexion',[]);
    }
}
