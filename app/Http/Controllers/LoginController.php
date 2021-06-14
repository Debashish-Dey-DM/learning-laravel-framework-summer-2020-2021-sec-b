<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function index(){
 
        return view('login.index');
}

    public function verify(Request $req){
        //regular data and flash data
        //regular data => store,read,delete,update

        //store
        // $req->session()->put('uname', 'abc'); 
        // $req->session()->put('password', '1234');

        // $uname = $req->session()->get('uname');
        // $alldata = $req->session()->all();

        // //delete
        // $req->session()->forget('password');
        // $req->session()->flush();
        // $uname = $req->session()->pull('uname');
        //  $req->session()->has('uname');



        if($req->uname == $req->password){
            $req->session()->put('uname', $req->uname);
            return redirect('/home');
        }
        else{
            $req->session()->flash('msg', 'invalid username or password');
            return redirect('/login');
        }
    }
}
