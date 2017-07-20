<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Mail\welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    //
    

    public function create ()
    {
        return view('auth.registration');
    }

    public function store () 
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);
        Log::info('controller'.$user);

        \Mail::to($user)->send(new welcome($user));

        return redirect('/');

    }
}
