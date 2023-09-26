<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create()
    {
        return view('livewire.user-component');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'terms-policy' => 'accepted',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        session()->flash('success', 'Successful registration!');
//        dd($user);
        Auth::login($user);
        $userName = $user->name;
        return redirect()->route('home');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('shop')->with('success', 'You successfully logged in.');
        }
        return redirect()->back()->with('error', 'Incorrect login or password.');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('success', 'You has been logout.');
        return redirect()->route('login.create');
    }
}
