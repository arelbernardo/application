<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends ModuleController
{
    //non-transactional methods
    public function index() {
        return view('module.expense.index');
    }
    //transactional methods
}
