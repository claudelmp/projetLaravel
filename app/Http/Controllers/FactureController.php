<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
   Public function show($n) {
        return view('facture')->with('numero', $n);
    }
}
