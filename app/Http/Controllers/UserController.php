<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('alluser',compact('users'));
    }
    public function toggle(Request $request)
    {
        $user = User::find($request->user_id);
        $data= auth()->user()->toggleFollow($user);
        return response()->json(['success'=>$data]);
    }
}
