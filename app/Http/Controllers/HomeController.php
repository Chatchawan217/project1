<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัสดี";
    }

    public function greeting($name){
        return "สวัสดี $name";
    }

    public function calculator($n1, $n2, $n3){
        return "ผลรวมของเลข $n1, $n2 และ $n3 = " . ($n1+$n2+$n3);
    }
}
