<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersController extends Controller
{
    public function user($user){
        $data = User::where('id', $user)->get();
        return view('user',['user'=>$data]);
    }
    public function users(){
        $users = User::orderBy('id', 'desc')->get();
        return view('users',['users'=>$users]);
    }

    public function psw(Request $request){
        // $validate = $this->validate($request,[
        //     'password' => ['required', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/']
        // ]);
        $validate = $this->validate($request,[
            'password' => ['required', 'string', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/']
        ]);
            $userid = $request->input('id');
            $pass = $request->input('password');
            $data = User::where('id', $userid)->first();

            $data->password = Hash::make($pass);

            $data->save();

            return redirect()->route('users.user', [$userid]);

        }
        
        
        
        //return view('user',['user'=>$request]);
    }


