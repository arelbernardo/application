<?php

namespace App\Http\Controllers;

use Helpers\Custom\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ModuleController extends Controller
{
    //constant vars
    const MODULE_EXPENSE = 'Expense';
    const MODULE_NOTE = 'Note';

    const MODULE_EXPENSE_OVERVIEW = 0;
    const MODULE_EXPENSE_MYEXPENSE = 1;
    const MODULE_EXPENSE_INSIGHT = 2;
    const MODULE_EXPENSE_SETTINGS = 3;

    const EXPENSE_TAB = array(//array keys are method names
        'index' => self::MODULE_EXPENSE_OVERVIEW,
        'myExpense' => self::MODULE_EXPENSE_MYEXPENSE,
        'insight' => self::MODULE_EXPENSE_INSIGHT,
        'settings' => self::MODULE_EXPENSE_SETTINGS
    );

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
                    'link' => '/app/finance/myexpense'
                ),
                array(
                    'name' => 'Insight',
                    'link' => '/app/finance/insight'
                ),
                array(
                    'name' => 'Settings',
                    'link' => '/app/finance/settings'
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

    public function __construct() {
        $this->middleware('auth');
        $current_action = Helpers::getCurrentControllerAction();
        self::$module_navarr['active_module'] = 'ExpenseController' == $current_action['controller'] ? self::MODULE_EXPENSE : self::MODULE_NOTE;
        self::$module_navarr[self::$module_navarr['active_module']]['active_tab'] = self::EXPENSE_TAB[$current_action['action']];
        View::share('module_navarr', self::$module_navarr);
    }
}
