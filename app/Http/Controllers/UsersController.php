<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests\Users\UpdateProfileRequest;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());    
    }


    public function edit()
    {
        return view('admin.users.edit')->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name'  => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success', 'User updated successfully.');

        return redirect()->back();
        
    }

    public function makeAdmin(User $user)
    {
        
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'User made admin successfully.');

        return redirect(route('admin.users.index'));
        
    }

}