<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth; 

class LoginController extends Controller {

    public function login() {
        $request = $this->validate(request(), [
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($request)) {            
            return view('home');
        }

        return redirect()->back()->withErrors(['usuario' => trans('auth.failed')])
                                ->withInput(['usuario' => $request['usuario']]);   
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
