<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends ModuleController
{
    //non-transactional methods
    

    //transactional methods
    public function index() {
        return view('module.expense.index');
    }
    public function myExpense() {
        return view('module.expense.myexpense');
    }
    public function insight() {
        return view('module.expense.insight');
    }
    public function settings() {
        return view('module.expense.settings');
    }
}
