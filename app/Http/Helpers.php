<?php

use Illuminate\Support\Facades\Route;

//active menu
if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'active open')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}

// when menu item has sub menu
if(!function_exists('isActiveSubMenu'))
{
    function isActiveSubMenu($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}