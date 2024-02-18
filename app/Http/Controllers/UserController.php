<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{  public function getall()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }
    public function delete($id)
    {
        $user = user::find($id);

        if (!$user) {
            return redirect()->route('users')->with('error', 'user not found.');
        }

        $user->delete();

        return redirect()->route('users')->with('success', 'user deleted successfully.');
    }


    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'nullable|string|max:255',
        ]);
    
        user::create($validatedData);
    
        return redirect()->route('users')->with('success', 'user added successfully.');
    }
}
