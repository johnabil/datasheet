<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons as Persons;

class MainController extends Controller
{
    public function addPersonView(){
        return view('add_person');
    }

    public function addOdasView(){

        $persons = Persons::all();

        return view('odas', compact('persons'));
    }

    public function addOthersView(){

        $persons = Persons::all();
        return view('other_points', compact('persons'));
    }

    public function perviewSheet(){

        $persons = Persons::all();
        return view('perview_sheet', compact('persons'));
    }

    public function addPerson(Request $request){

        $person = new Persons();
        $person->name = $request->get('name');
        $person->points = $request->get('points');
        $person->save();

        return redirect()->to('/');
    }

    public function addPoints(Request $request){

        $all_persons = Persons::all();
        $myCheckboxes = $request->input('my_checkbox');

        foreach ($all_persons as $person){

            if(in_array($person->name, $myCheckboxes)){
                $person->points += 300;
                $person->save();
            }

            else{
                $person->points -= 300;
                $person->save();
            }

        }

        return redirect()->to('/');
    }

    public function addOtherPoints(Request $request){
        $all_persons = Persons::all();
        $myCheckboxes = $request->input('my_checkbox');

        foreach ($all_persons as $person){

            if(in_array($person->name, $myCheckboxes)){
                $person->points += 200;
                $person->save();
            }

            else{
                $person->points -= 200;
                $person->save();
            }

        }

        return redirect()->to('/');
    }
}
