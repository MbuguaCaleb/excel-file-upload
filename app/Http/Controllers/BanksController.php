<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanksController extends Controller
{
    public function show(){


        return view('banks.import');
    }

    public function store(){

    }
}
