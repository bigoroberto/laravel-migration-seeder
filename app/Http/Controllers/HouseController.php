<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(){

        $houses = House::paginate(10);
        //dump($houses);


        return view('house',['houses' => $houses]);
    }
}
