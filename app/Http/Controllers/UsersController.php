<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class UsersController extends Controller{

    public function getMeProfile(){
        $username = 'Darlley';
        return view('users', compact('username')); 
    }

    public function getProfile(string $username){
        $args = ['a', 'b', 'c', 1, 2, 3];
        return view(
            'users', 
            compact(
                ['username', 'args']
            )
        );
    }

    public function test(TestRequest $request){}

    // public function test(Request $request){
    //     $this->validate($request, [
    //         'name'=>'required|exists:users',
    //         'age'=>'required|numeric|unique:users,age'
    //     ]);
    // }

    // public function test(){
    //     return redirect(
    //         route(
    //             'user-profile',
    //             ['username' => 'darlley']
    //         )
    //     );
    // }
}
