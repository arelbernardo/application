<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userModules = User::where('username', Auth::user()->username)->with('modules')->get()->toArray();
        $modules = array();
        if(count($userModules) > 0 && count($userModules[0]['modules']) > 0) {
             $modules = $userModules[0]['modules'];
        }
        return view('home', array('modules' => $modules));//todo
    }
}
