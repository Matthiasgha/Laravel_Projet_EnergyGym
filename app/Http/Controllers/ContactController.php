<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        $title = 'Contact';
        return view('contact',[
            'title' => $title,
        ]);
        
    }
}
