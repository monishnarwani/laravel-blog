<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create ()
    {
        return view('auth.login');
    }

    public function save ()
    {
        $user = \App\User::where('email', request('email'))->get();
        // dd(request(['email', 'password']), auth()->attempt(request(['email', 'password'])), $user);
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Pls check details.'
            ]);
        }

        return redirect('/');


    }

    public function destroy () 
    {
        auth()->logout();

        return redirect('/');
    }
}
