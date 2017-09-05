<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class ModuleController extends Controller
{
    //constant vars
    const MODULE_EXPENSE = 'Expense';
    const MODULE_NOTE = 'Note';

    public function __construct() {
        $this->middleware('auth');
        $active_module_temp = explode('@', Route::currentRouteAction());
        $active_module = array();
        $controller = explode('\\', $active_module_temp[0]);
        $controller = $controller[count($controller) - 1];
        array_push($active_module, $controller);
        array_push($active_module, $active_module_temp[1]);

        $module_navarr = array(
            'active_module' => in_array('ExpenseController', $active_module) ? self::MODULE_EXPENSE : self::MODULE_NOTE,
            self::MODULE_EXPENSE => array(
                'tabs' => array(
                    array(
                        'name' => 'Add',
                        'link' => ''
                    ),
                    array(
                        'name' => 'Edit',
                        'link' => ''
                    ),
                    array(
                        'name' => 'Delete',
                        'link' => ''
                    )
                ),
                'active_tab' => 0
            ),
            self::MODULE_NOTE => array(
                'tabs' => array(
                    array(
                        'name' => 'Add',
                        'link' => ''
                    ),
                    array(
                        'name' => 'Edit',
                        'link' => ''
                    ),
                    array(
                        'name' => 'Delete',
                        'link' => ''
                    )
                ),
                'active_tab' => 0
            )
        );
        View::share('module_navarr', $module_navarr);
    }
}
