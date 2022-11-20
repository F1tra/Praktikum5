<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Request;
use App\Http\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request -> all();
        $this-> validate ($request, ['email' => 'required|email','password' => 'required',]);
    if (auth()->attempt (array('email' =>$input['email'],'password' => $input['password'])))
    {
        if(Auth()->user()->roles_id == 1){
            return redirect()->route('admin.home');

        }else{
            return redirect()->route('home');
        }
    }
    else{
         return redirect()->route('login')->with('email','Email-addres And Password Are Wrong.');
    }
    }
}