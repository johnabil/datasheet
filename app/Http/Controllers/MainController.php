<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function addPersonView(){
        return view('add_person');
    }

    public function addPerson(Request $request){

    }
}
