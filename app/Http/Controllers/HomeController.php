<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

     public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('login');
        }if(Auth::user()->userType === 'ADMIN'){
            return redirect()->route('adm.dashboard');
        }if(Auth::user()->userType === 'FORN'){
            return redirect()->route('user.dashboard');
        }if(Auth::user()->userType === 'ASSISTENT'){
            return redirect()->route('assistent.dashboard');
        }
     }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
