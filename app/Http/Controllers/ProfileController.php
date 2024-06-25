<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function strukturOrg(){
        return view('profile.strukturOrg');
    }
}
