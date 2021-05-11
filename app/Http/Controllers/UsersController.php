<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * update user profie
     */
    public function update_profile(Request $request){
        $inputs = $request->validate([
            'name' =>'required|min:3',
            'email' => 'required'
        ]);

        $user = User::find(Auth::id());
        if($user->update($inputs)){
            return back()->with('msg','Profile Updated');
        }
    }
}
