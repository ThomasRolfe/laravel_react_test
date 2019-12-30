<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\StarSign;

class StarSignController extends Controller
{
    public function index() {

        $star_signs = StarSign::all();

        dd($star_signs);

        return view('star_signs.index', compact('star_signs'));
    }
}
