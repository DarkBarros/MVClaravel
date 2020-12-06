<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listUser()
    {
       //$user = new User();
       //$user->name = 'Gabriel';
       //$user->email = 'gabriel@gmail.com';
       //$user->password = 'Gabriel323';
       //$user->save();
        $user = User::where('id', '=', 2)->first();
        return view('listUser', 
        [
            'user'=> $user
        ]);
    }
    
}
