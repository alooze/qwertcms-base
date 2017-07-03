<?php
/**
 * Этот файл дописать на реальном проекте с мультиязычностью
 */

function lroute($name, $params=[])
{
    // dd(Request::route()->uri);
    // dd(app('url'));
    dd(route($name, $params, false));
}