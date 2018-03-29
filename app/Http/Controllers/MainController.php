<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons as Persons;

class MainController extends Controller
{
    public function addPersonView(){
        return view('add_person');
    }

    public function addPerson(Request $request){

        $person = new Persons();
        $person->name = $request->get('name');
        $person->save();

        return redirect()->to('/');
    }
}
