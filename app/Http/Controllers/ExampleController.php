<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common; 


class ExampleController extends Controller
{
    use Common;
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
 public function showUpload(){
    return view('upload');
}

public function upload(Request $request){
 
    $h = $this->uploadFile($request->image, 'assets/img');
    return $h;
}
public function place(){
    return view('place');
}
public function blog(){
    return view('blog');
}

}


