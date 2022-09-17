<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:4|max:50|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        // $validate['password'] = bcrypt($validate['password']);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        // $request->session()->flash('success', 'registration successfull!!, Please Login');

        return redirect('/login')->with('success', 'registration successfull!!, Please Login');
    }
}
