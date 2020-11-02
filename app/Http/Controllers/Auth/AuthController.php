<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request,$next = null)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'number' => 'required|integer',
                'password' => 'required|string'
            ]);
            if(\Auth::attempt(['phone_number' => $request->get('number'), 'password' => $request->get('password')])){
                if ($next === null) {
                    return redirect()->route('home');
                } else {
                    redirect()->to($next);
                }

            }
        } else {
            return view('auth.login');
        }
    }

    function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required|string',
                'number' => 'required|digits:11',
                'password' => 'required|min:6|string'
            ]);
            $user = new User();
            $user->name = $request->get('name');
            $user->phone_number = $request->get('number');
            $user->password = bcrypt($request->get('password'));
            if ($user->save()) {
                return redirect()->route('login');
            }
        } else {
            return view('auth.register');
        }
    }
    function admin_login(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'number' => 'required|numeric',
                'password' => 'required|string'
            ]);
            if(\Auth::attempt(['phone_number' => $request->get('number'), 'password' => $request->get('password')])){
                $user = User::findorFail(auth()->user()->id);
                $user->last_login = Carbon::now();
                $user->update();
                return redirect()->route('admin.dashboard');
            } else {
                return back()->withErrors(['Credential error']);
            }
        } else {
            return view('admin.auth.login');
        }
    }
}
