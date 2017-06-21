<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
        return view('auth.admin-login');
                   
    }
    
    public function login(Request $request)
    {
        //validate data
        $this->validate($request, [
            
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        //Attempt to log user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            // if succeeful then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
            
        }
        
        
        
        return redirect()->back()->withInput($request->only('email', 'remember'));
                   
    }
    
        public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        //$request->session()->flush();

        //$request->session()->regenerate();

        return redirect('/');
    }
}

