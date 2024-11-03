<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifsController extends Controller
{
    function index() {
        $title = 'Tarif';

        return view('tarifs',[
            'title' => $title,
        ]);
    }
}
