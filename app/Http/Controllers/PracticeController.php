<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function table(){
        $name = 'emma';
        $state ='Lagos';
        return view('personal_practices.multiplications',compact('name','state'));
    }
}
