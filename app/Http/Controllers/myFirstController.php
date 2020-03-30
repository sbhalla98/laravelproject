<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myFirstController extends Controller
{
    function show(){
        $carsname=DB::table('cars')->where('status','Available')->get();
        return view('index',['c'=>$carsname]);
    }
}
