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

/**
 * Получаем префикс текущей локали
 * @return string префикс локали
 */
function locale()
{
    if (config('qwertcms.use_multilang')) {
        return App::getLocale();
    } else {
        return null;
    }    
}