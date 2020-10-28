<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

if (!function_exists('getMessage')) {
    function getMessage($key = null, $replace = [], $locale = null)
    {
        return trans('messages.' . $key, $replace, $locale);
    }
}

if (!function_exists('getCurrentRouteName')) {
    function getCurrentRouteName()
    {
        return Route::currentRouteName();
    }
}

if (!function_exists('getCurrentControllerAction')) {
    function getCurrentControllerAction()
    {
        $routeAction = Route::currentRouteAction();
        $arrayRouteAction = explode('\\', $routeAction);
        $controllerAction = end($arrayRouteAction);

        list($controller, $action) = explode('@', $controllerAction);
        return [
            'controller' => $controller,
            'action' => $action,
        ];
    }
}

if (!function_exists('getCurrentControllerName')) {
    function getCurrentControllerName($toLower = true)
    {
        $controller = data_get(getCurrentControllerAction(), 'controller');
        $controller = data_get(explode('Controller', $controller), 0);
        return $toLower ? Str::lower($controller) : $controller;
    }
}

if (!function_exists('getCurrentActionName')) {
    function getCurrentActionName()
    {
        return data_get(getCurrentControllerAction(), 'action');
    }
}

if (!function_exists('getLocale')) {
    function getLocale($default = 'vi')
    {
        $locale = app()->getLocale();
        return $locale ? $locale : config('app.locale', $default);
    }
}

if (!function_exists('setLocale')) {
    function setLocale($locale = 'vi')
    {
        app()->setLocale($locale);
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

if (!function_exists('isBackend')) {
    function isBackend()
    {

    }
}

if (!function_exists('isFrontend')) {
    function isFrontend()
    {

    }
}

if (!function_exists('isApi')) {
    function isApi()
    {

    }
}
