<?php

namespace Helpers\Custom;

use Illuminate\Support\Facades\Route;

class Helpers {

    //route-related methods
    public static function getCurrentControllerAction() {
        $current_controller_action = explode('@', Route::currentRouteAction());
        $temp_controller = explode('\\', $current_controller_action[0]);
        $controller = $temp_controller[count($temp_controller) - 1];
        $action = $current_controller_action[1];
        return array('controller' => $controller, 'action' => $action);
    }

}