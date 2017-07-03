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
         */
        if (Config::get('qcms.include_routes')) {
            include __DIR__ . '/routes.php';
        }

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
         * Шаблоны для админки
         */
        $this->loadViewsFrom(__DIR__.'/views', 'qwertcms');

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/qwertcms'),
        ], 'qwertcms_public');

        $this->publishes([
            __DIR__.'/views'  => base_path('resources/views/vendor/qwertcms'),
        ], 'qwertcms_view');

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
