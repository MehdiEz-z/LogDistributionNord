<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaisseController extends Controller
{
    //
    public function Index (){


        return view('admin.redirects.Caisse.caisse');
    }
}