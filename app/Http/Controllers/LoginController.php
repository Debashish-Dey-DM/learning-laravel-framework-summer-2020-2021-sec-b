<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;

class LoginController extends Controller
{
     public function index(){
 
        return view('login.index');
}

    public function verify(UserRequest $req){
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



        // $validation = Validator::make($req->all(), [
        //     'uname' => 'required',
        //     'password' => 'required|min:5'
        // ]);
        // if($validation->fails()){
        //     return back()
        //     ->with('errors', $validation->errors())
        //     ->withInput();

        //     // return redirect()->route('login.index')->with('errors', $validation->errors());
        // }
  
        // $this->validate($req,[
        //     'uname' => 'required',
        //     'password' => 'required|min:5'
        // ])->validate();



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
