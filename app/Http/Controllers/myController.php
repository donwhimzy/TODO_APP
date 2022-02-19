<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function loopPage(){
        $loop=[];
        for($i=1;$i<=10;$i++){
            array_push($loop,$i);
          }


        //   dd($loop);
        return view('personal_practices.counter',compact('loop'));
    }
    public function firstAssocArray(){
        $data=['name'=>'uche','age'=>'12','gender'=>'male','dob'=>'your dob','email'=>'uche@gmail.com'];
        // foreach($data as $i=>$j){
        //     echo
        // }

        //   dd($loop);
        return view('personal_practices.firstAssoc',compact('data'));
    }

    public function firstrequest(Request $request){
        $multi=[];
        $name = $request-> firstname;
        $email = $request -> email;

        for($i=$name;$i<=$name;$i++){
            for($j=1;$j<=$email;$j++){
                $result = $i." X ".$j. " = ".$i*$j;
                array_push($multi,$result);
            }
        }
        // dd($multi);


        // dd($myEmail);
        // dd($fname);
        // dd($request ->all());

        return view('REQUEST.firstrequest',compact('multi','name','email'));
    }

    public function parameters(){


        return view('REQUEST.parameter');
    }

    public function createproduct(){


        return view('products.create_product');
    }


}
