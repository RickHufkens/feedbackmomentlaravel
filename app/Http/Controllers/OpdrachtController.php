<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class OpdrachtController extends Controller
{
    public function show(){
        $name = "Rick Hufkens";
        $fruits = Fruit::all();
        return view('opdracht',['name'=>$name, 'fruits'=>$fruits]);
    }

}
