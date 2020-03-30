<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mySignupController extends Controller
{
    function Signup(){
        return view('signup');
    }
    function Val(Request $request){
        $name=$request->fname;
        $id=$request->id_no;
        $email=$request->email;
        $phone=$request->phone;
        $gender=$request->gender;
        $location=$request->location;
        if(trim($name)==NULL || trim($id)==NULL || trim($email)==NULL || trim($phone)==NULL || trim($gender)==NULL || trim($location)==NULL ){
            echo "<script type = \"text/javascript\">
            alert(\"NO FEILD CAN BE EMPTY!!!\");
            </script>";
            return view('signup');
        }
        if(strlen($phone)!=10){
            echo "<script type = \"text/javascript\">
            alert(\"ENTER CORRECT PHONE NUMBER!!!\");
            </script>";
            return view('signup');
        }
        $users = DB::table('client')->where([
            ['id_no', '=', $id],
        ])->get();
        if(!$users->isEmpty()){
            echo "<script type = \"text/javascript\">
            alert(\"REGISTRATION FAILED!!! ID ALLREADY REGISTERED!!!\");
            </script>";
            return view('signup');
        }
        echo "<script type = \"text/javascript\">
            alert(\"SUCESSFULLY REGISTERED!!!\");
            </script>";
        $bool=DB::table('client')->insert([
            ['fname'=>$name,'email'=>$email,'id_no'=>$id,'phone'=>$phone,'location'=>$location,'gender'=>$gender,'status'=>'Available']
        ]);
        
        return view('login');
    }
}
