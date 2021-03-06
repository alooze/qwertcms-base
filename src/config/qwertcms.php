<?php
/**
 * Настройки QWERT CMS
 */

return [
    /**
     * Использовать маршруты пакетов qwertcms
     * (резерв, пока не используется)
     */
    'include_routes' => true,

    /**
     * Использовать встроенную мультиязычность
     */
    'use_multilang' => true,

    /**
     * Языки сайта (см. также app.php)
     */
    'locales' => [
        'ru' => 'Русский',
        'ua' => 'Українська',
        'en' => 'English', 
    ],

    /**
     * Всегда добавлять ключ языка в URL
     * true - всегда
     * false - кроме языка по умолчанию
     */
    'always_in_url' => false, // reserved
];