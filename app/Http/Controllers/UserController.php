<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function displayUserList(){
        $user = User::all();
        return view('UserList', ['user' => $user]);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/userlist');
    }

    public function getUserById($id){
        $user = User::find($id);
        return $user;
    }
}
