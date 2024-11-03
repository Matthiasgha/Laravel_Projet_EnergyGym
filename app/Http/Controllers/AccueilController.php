<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index() {
        $title = 'Accueil';

        return view('accueil',[
            'title' => $title,
        ]);
    }
}
