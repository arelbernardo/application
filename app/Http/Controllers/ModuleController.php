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

    const MODULE_INDEX_OVERVIEW = 0;
    const MODULE_INDEX_ADD = 1;
    const MODULE_INDEX_EDIT = 2;
    const MODULE_INDEX_DELETE = 3;

    static $module_navarr = array(
        'active_module' => '',
        self::MODULE_EXPENSE => array(
            'tabs' => array(
                array(
                    'name' => 'Overview',
                    'link' => '/app/finance'
                ),
                array(
                    'name' => 'My Expenses',
                    'link' => 'finance/myexpense'
                ),
                array(
                    'name' => 'Insight',
                    'link' => 'finance/insight'
                ),
                array(
                    'name' => 'Settings',
                    'link' => 'finance/settings'
                )
            ),
            'active_tab' => self::MODULE_INDEX_OVERVIEW
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
            'active_tab' => self::MODULE_INDEX_OVERVIEW
        )
    );

    public function __construct() {
        $this->middleware('auth');
        $active_module_temp = explode('@', Route::currentRouteAction());
        $active_module = array();
        $controller = explode('\\', $active_module_temp[0]);
        $controller = $controller[count($controller) - 1];
        array_push($active_module, $controller);
        array_push($active_module, $active_module_temp[1]);

        self::$module_navarr['active_module'] = in_array('ExpenseController', $active_module) ? self::MODULE_EXPENSE : self::MODULE_NOTE;
        View::share('module_navarr', self::$module_navarr);
    }
}
