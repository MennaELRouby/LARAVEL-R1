<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test1(){
return view("login");
}

public function addCar(){
    return view("addCar");

}


 public function postData(Request $request)
 {
    echo $title = Request::createFromGlobals()->get('title');
    echo "\n";
    echo $price =  Request::createFromGlobals()->get('price');
    echo "\n";
    echo $content = Request::createFromGlobals()->get('content');
    echo "\n";
    echo $pub = Request::createFromGlobals()->get('pub');
    echo "\n";

    return $request;
    return "the title is" . $request->title;
 }
}
