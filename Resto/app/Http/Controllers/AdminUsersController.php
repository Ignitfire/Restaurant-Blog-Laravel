<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('adminUsers',['users'=>$users]);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('adminUsers.index')->with('success',"L'utilisateur a bien été supprimé");
    }
}
