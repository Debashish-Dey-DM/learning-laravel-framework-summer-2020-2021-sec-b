<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 public function index(){
        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function details($id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){
        $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }

    public function edit($id){
        //find user by id from user list $user
        $users = $this->getUserList();
        $editUser = '';
                foreach($users as $u){
            if($u['id'] == $id){
                $editUser = $u;
                break;
            }
        }

        return view('user.edit')->with('editUser', $editUser);
    }

    public function update(Request $req, $id){
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u =>$subArray){
            if($subArray['id'] == $id){
                $users[$u]['name']=$req->uname;
                $users[$u]['password']=$req->password;
                $users[$u]['email']=$req->email;
                $users[$u]['type']=$req->type;
                

                   
            }
        }
        return view('user.list')->with('userList', $users);

       
    }

    public function delete( $id){
        //confirm window
        $users = $this->getUserList();
        $userser = '';
                foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }

        //find user by id $user

        return view('user.delete')->with('user', $user);
    }

    public function destroy(Request $req, $id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u => $subArray){
            if($subArray['id'] == $id){
                    unset($users[$u]);
            }
        }
           
        return view('user.list')->with('userList', $users);
    }


    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'Debashish', 'email'=>'debashish@email.com'],
            ['id'=>2, 'name'=>'Emon', 'email'=>'emon@email.com'],
            ['id'=>3, 'name'=>'Rokan', 'email'=>'rokan@email.com']
        ];
    }
}
