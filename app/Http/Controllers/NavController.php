<?php

namespace App\Http\Controllers;

use App\Models\book;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function perso()
    {
        return view('character');
    }

    public function ajout()
    {
        return view('ajout');
    }

    function show()
    {
        $data= book::all();
        return view('list',['book'=>$data]);
    }
}
