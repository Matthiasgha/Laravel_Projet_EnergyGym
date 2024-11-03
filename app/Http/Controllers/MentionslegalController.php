<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionslegalController extends Controller
{
    function index() {
        $title = 'Mentions Légal';

        return view('mentionslegal',[
            'title' => $title,
        ]);
    }
}
