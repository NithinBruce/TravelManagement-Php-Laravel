<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MyFirstPageController extends Controller
{
public function sayHello() : View
    {
        return view("my-first-page");
    }
    public function create(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');

        $request->validate([
            'name' => 'required|max:20|string',
            'email'=>'required|max:100|string',
        ]);
        return redirect('hello-world');         
    }
}