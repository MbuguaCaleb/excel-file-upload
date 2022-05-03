<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\BanksImport;
class BanksController extends Controller
{
    public function show(){


        return view('banks.import');
    }

    public function store(Request $request){

       $file = $request->file('file')->store('import');

       (new BanksImport)->import($file);

       return back()->withStatus("Excel file imported successfully");

    }
}
