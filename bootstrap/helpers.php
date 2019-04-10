<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4
 * Time: 15:57
 */
use Illuminate\Support\Facades\Route;

if (!function_exists('route_class'))
{
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}
