<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
