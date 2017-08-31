<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('profile');
    }

    public function index() {
        return view('profile.index');
    }
    //non-transaction methods here
    public function addExpenseModal() {
        return view('resources.modal.expense_createupdate');
    }
    //transactional methods here
    //static methods
    public static function getAcquiredModulesByUser() {
        return User::where('username', Auth::user()->username)->with('modules')->get()->toArray();
    }

}
