<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    function index() {
        $title = 'Cours';

        return view('cours',[
            'title' => $title,
        ]);
    }
}
