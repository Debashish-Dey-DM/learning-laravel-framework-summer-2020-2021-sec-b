<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(Request $req){
        //  $name = 'dipto';
        //  $id = 1234;
        // return view('home.index', compact('name','id'));
    // return view('home.index', ['name' => 'dipto', 'id' => '1234']);
    
    // return view('home.index',)
    //         ->with('id', '12')
    //         ->with('name','dipto');
    if($req->session()->has('uname')){
           return view('home.index',)
            ->withId('12')
            ->withName('diptoo');
    }else{
        $req->session()->flash('msg','Invalid Request');
        return redirect('/login');
    }
 
}
}
