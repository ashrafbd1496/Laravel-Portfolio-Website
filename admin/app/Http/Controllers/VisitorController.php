<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function visitorIndex(){

        $visitorData = json_decode(VisitorModel::orderBy('id','desc')->take(100)->get());
        // $visitorData = json_decode(VisitorModel::all()); 

         return view('visitor',['visitorData'=>$visitorData]);

    }
}
