# qwertcms-base

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Базовая установка для скелета CMS


## Установка

``` bash
$ laravel new [App]
$ cd [App]
```
В файле .env заменить localhost на свой домен, прописать доступы к БД и пр.

``` bash
$ composer require alooze/qwertcms-base ~1.0
```

Вставить в секцию 'providers' в файле config/app.php  строки

``` php
        JeroenNoten\LaravelAdminLte\ServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
        Unisharp\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
        alooze\QwertCms\QwertCmsBaseServiceProvider::class,
```

Вставить в секцию 'aliases' в файле config/app.php  строки

``` php
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Image' => Intervention\Image\Facades\Image::class,
```
Выполнить в консоли

``` bash
$ php artisan vendor:publish
```

Для установки/обновления только файлов пакета можно использовать команду:

``` bash
$ php artisan vendor:publish --provider="alooze\QwertCms\QwertCmsBaseServiceProvider"
```

Скопировать содержимое метода *run()* из файла *database/seeds/DatabaseSeederExample.php* в *database/seeds/DatabaseSeeder.php*

Выполнить в консоли

``` bash
$ composer dump-autoload -o
```
    

затем

``` bash
$ php artisan migrate --seed 
```
(внимание! выполнять только на чистой установке!)

либо

``` bash
$ php artisan migrate:refresh --seed 
```

При необходимости отредактировать файл *config/qwertcms.php*


Отредактировать файл *config/adminlte.php* таким образом, чтобы в секции меню для чистой установки было только:

``` php
    'menu' => [

        'ДАННЫЕ ИЗ ФОРМ',
        [
            'text' => 'Обратный звонок',
            'url' => 'admin/relations/callbackform',
            'icon' => 'paper-plane',
            'icon_color' => 'green'
        ],

        'УПРАВЛЕНИЕ',
        [
            'text' => 'Пользователи',
            'url' => 'admin/users',
            'icon' => 'user',
            'icon_color' => 'green',
        ],
        [
            'text' => 'Почта менеджеров',
            'url' => 'admin/emails',
            'icon' => 'envelope',
            'icon_color' => 'green',
        ],
        [
            'text' => 'Настройка форм',
            'url' => 'admin/forms',
            'icon' => 'server',
            'icon_color' => 'green',
        ],
    ],
```

(если такого файла не существует, установить пакет adminLTE командой 
    *composer require jeroennoten/laravel-adminlte*
)

В папке *app/Http/Controllers/Auth* во всех файлах заменить 

``` php
    protected $redirectTo = '/home';
```
на 
``` php
    protected $redirectTo = '/admin';
```

В файле *app/Http/Middleware/RedirectIfAuthenticated.php* заменить
```php
    return redirect('/home');
```
на 
``` php
    return redirect('/admin');
```
В файле routes/web.php разместить маршруты:

``` php
    Auth::routes();
    include __DIR__ . '/qwert.php';
```


В файле *app/Providers/AppServiceProvider.php* добавить в метод *register()* подключение хелперов

``` php
        foreach (glob(app_path('Helpers/*.php')) as $filename) {
            require_once($filename);
        }
```

Открыть в браузере адрес http://ДОМЕН/admin 
Должно появиться приглашение на ввод логина 

После установки данные для входа admin@admin.com:admin123

## Testing

(Не реализовано)

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email a.looze@gmail.com instead of using the issue tracker.

## Credits

- [alooze][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/alooze/qwertcms.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/alooze/qwertcms/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/alooze/qwertcms.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/alooze/qwertcms.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alooze/qwertcms.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/alooze/qwertcms
[link-travis]: https://travis-ci.org/alooze/qwertcms
[link-scrutinizer]: https://scrutinizer-ci.com/g/alooze/qwertcms/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/alooze/qwertcms
[link-downloads]: https://packagist.org/packages/alooze/qwertcms
[link-author]: https://github.com/alooze
[link-contributors]: ../../contributors
