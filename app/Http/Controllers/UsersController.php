<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller{

    public function getMeProfile(){
        $username = 'Darlley';
        return view('users', compact('username')); 

    }

    public function getProfile(string $username){
        return view('users', compact('username')); 
    }

    public function test(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required|numeric'
        ]);
    }


    // public function test(){
    //     return redirect(
    //         route(
    //             'user-profile', 
    //             ['username' => 'darlley']
    //         )
    //     );
    // }
}
