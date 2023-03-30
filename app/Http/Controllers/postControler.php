<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postControler extends Controller
{
    public function index()


    {


        $title=[" c'est a premier",
        " fois de cree un article"];
        return view('articles', compact('title'));
    }
}
