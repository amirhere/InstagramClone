<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //

    public function index($user)
    {
        $user = User::findorFail($user);

        return view('profiles/index',[
            'user' => $user,
        ]);
    }


    public function edit(\App\User $user)
    {

        $this->authorize('update', $user->profile);

       return view('profiles.edit', compact('user'));
    }

    public function update(\App\User $user)
    {
        $data = request()->validate([
            'title'=> 'required',
            'description' => 'required',
            'url'=> '',
            'image'=> '',
        ]);


        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }





}
