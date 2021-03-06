<?php 
namespace alooze\QwertCms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

/**
 * Class QwertCmsBaseServiceProvider
 * @package alooze\QwertCms
 */
class QwertCmsBaseServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Подключаем базовые маршруты
         * пока оставляем это для ручной работы
         */
        // if (Config::get('qwertcms.include_routes')) {
        //     include __DIR__ . '/routes.php';
        // }

        /**
         * Языки (резерв)
         */
        // $this->loadTranslationsFrom(__DIR__ . '/lang', 'qwertcms');
        
        /**
         * Настройки
         */
        $this->publishes([
            __DIR__ . '/config/qwertcms.php' => base_path('config/qwertcms.php'),
        ], 'qwertcms_config');

        /**
         * Роуты
         */
        $this->publishes([
            __DIR__ . '/routes' => base_path('routes/'),
        ], 'qwertcms_routes');

        /**
         * Шаблоны для админки
         */
        $this->loadViewsFrom(__DIR__.'/views', 'qwertcms');

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/qwertcms'),
        ], 'qwertcms_public');

        $this->publishes([
            __DIR__.'/views'  => base_path('resources/views/'),
        ], 'qwertcms_view');

        /**
         * Шаблоны авторизации
         */
        // $this->publishes([
        //     __DIR__.'/views/auth'  => base_path('resources/views/auth'),
        // ], 'qwertcms_view');

        /**
         * Миграции и seeds
         */
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ], 'qwertcms_migrations');

        $this->publishes([
            __DIR__ . '/database/seeds/' => database_path('seeds')
        ], 'qwertcms_seeds');

        /**
         * Базовые контроллеры
         */
        $this->publishes([
            __DIR__ . '/controllers/' => app_path('Http/controllers')
        ], 'qwertcms_controllers');

        /**
         * Модели
         */
        $this->publishes([
            __DIR__ . '/Models/' => app_path()
        ], 'qwertcms_models');

        /**
         * Шаблоны писем
         */
        $this->publishes([
            __DIR__ . '/Mail/' => app_path('Mail')
        ], 'qwertcms_mail');

        /**
         * Функции хелперы
         */
        $this->publishes([
            __DIR__ . '/Helpers/' => app_path('Helpers')
        ], 'qwertcms_helpers');

        /**
         * Языковые файлы
         */        
        $this->publishes([
            __DIR__ . '/lang/adminlte/ru' => base_path('resources/lang/vendor/adminlte/ru/')
        ], 'qwertcms_adminlang');
        $this->publishes([
            __DIR__ . '/lang/laravel/ru' => base_path('resources/lang/ru/')
        ], 'qwertcms_lang');

        /**
         * Middleware для мультиязычности
         */
        $this->publishes([
            __DIR__ . '/Middleware' => app_path('Http/Middleware/')
        ], 'qwertcms_lang');
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('qwertcms-base', function () {
            return true;
        });
    }
}
