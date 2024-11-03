<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    function index() {
        $title = 'Accueil';

        return view('acceuil',[
            'title' => $title,
        ]);
    }
}
