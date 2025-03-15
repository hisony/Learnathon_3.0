<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('userinfos')->get();
        return $users;
    }

    public function addUser(Request $req)
    {
        try {
            // Insert into database
            $user = DB::table('userinfos')->insert([
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password, 
                'role' => $req->role
            ]);

            if ($user) {
                echo "<h1>Successfully Registered</h1>";
            }
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                echo "<h1>Failed Registration: Email Already Exists!</h1>";
            } else {
                echo "<h1>Failed Registration: Something went wrong.</h1>";
            }
        }

    }

    public function loginCheck(Request $req)
    {

        $user = DB::table('userinfos')->where('email', $req->email)->first();

        if ($user) {
            if ($req->password == $user->password) {
                if ($user->role == 'Student') {
                    return view('student');

                } elseif ($user->role == 'Teacher') {
                    return view('teacher');

                } elseif ($user->role == 'Admin') {
                    return view('admin');

                } else {
                    return view('login');
                }
            } else {
                return back()->with('error', 'Invalid Password!');
            }
        } else {
            return back()->with('error', 'User not found!');
        }
    }


}
