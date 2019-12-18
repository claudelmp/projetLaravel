<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller {

    Public function show($n) {
        return view('article')->with('numero', $n);
    }

}
