<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myLoginController extends Controller
{
    function Login(){
        return view('login');
    }
    function Val(Request $request){
        $email=$request->email;
        $pass=$request->pass;
        $users = DB::table('client')->where([
            ['email', '=', $email],
            ['id_no', '=', $pass],
        ])->get();
        if($users->isEmpty()){
            echo "<script type = \"text/javascript\">
            alert(\"LOGIN FAILED!!! TRY AGAIN!!!\");
            </script>";
            return view('login');
        }
        else{
            echo "<script type = \"text/javascript\">
            alert(\"LOGIN SUCESSFULL!!!\");
            </script>";
            $carsname=DB::table('cars')->where('status','Available')->get();
            return view('index',['c'=>$carsname]);
        }
    }
   
}
