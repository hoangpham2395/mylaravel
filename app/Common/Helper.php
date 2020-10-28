<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if (!function_exists('getConstant')) {
    function getConstant($key = '', $default = null)
    {
        return config('constant.' . $key, $default);
    }
}

if (!function_exists('getConfig')) {
    function getConfig($key = '', $default = null)
    {
        return config('config.' . $key, $default);
    }
}

if (!function_exists('getFileSystem')) {
    function getFileSystem($key = '', $default = null)
    {
        return config('filesystems.' . $key, $default);
    }
}

if (!function_exists('getCurrentRouteName')) {
    function getCurrentRouteName()
    {
        return Route::currentRouteName();
    }
}

if (!function_exists('getCurrentRouteAction')) {
    function getCurrentRouteAction()
    {
        $routeAction = Route::currentRouteAction();
        $action = end(explode('\\', $routeAction));
        if (empty($action)) {
            return [];
        }

        return [
            'controller' => data_get(explode('@', $action), 0),
            'action' => data_get(explode('@', $action), 1),
        ];
    }
}

if (!function_exists('getCurrentControllerName')) {
    function getCurrentControllerName()
    {
        return data_get(getCurrentRouteAction(), 'controller');
    }
}

if (!function_exists('getCurrentActionName')) {
    function getCurrentActionName()
    {
        return data_get(getCurrentRouteAction(), 'action');
    }
}

if (!function_exists('getCurrentLocale')) {
    function getCurrentLocale()
    {
        return config('app.locale');
    }
}

if (!function_exists('backendGuard')) {
    function backendGuard()
    {
        return Auth::guard('admins');
    }
}

if (!function_exists('frontendGuard')) {
    function frontendGuard()
    {
        return Auth::guard('users');
    }
}

if (!function_exists('isSoftDeletesDefault')) {
    function isSoftDeletesDefault()
    {
        return getFileSystem('soft_deletes_default');
    }
}
