<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function paten(){
        return view('pengenalan.index');
    }
}
