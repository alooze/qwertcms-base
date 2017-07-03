<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ seo('seo_title', 'main', 'Франшиза1') }}</title>
    <!-- SEO -->
    <meta name="description" content="{{ seo('seo_description', 'main') }}" />
    <meta property="og:title" content="{{ seo('og_title', 'main', 'Франшиза') }}">
    <meta property="og:description" content="{{ seo('og_description', 'main') }}">
    <meta property="og:image" content="{{ config('app.url') }}/{{ seo('og_image', 'main', 'img/logo@2x.png') }}">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <!-- /SEO -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <script>
        document.createElement( "picture" );
    </script>
    <script src="{{ asset('js/vendor/picturefill.min.js') }}" async></script>
    {!! counters('end_head') !!}
</head>

<body>
    {!! counters('start_body') !!}
    <header class="header-menu header-menu--others header-menu--mob header-menu--fixed" data-headroom data-tolerance="5" data-offset="55" data-classes='{"initial":"header-bar","pinned":"is-minimized","unpinned":"is-maximized","top":"header-bar--top","notTop":"headroom--not-top","bottom":"headroom--bottom","notBottom":"headroom--not-bottom"}'>
        <div class="header-menu__inner">
            <div class="header-menu__logo-wrap header-menu__logo-wrap--secondary">
                <i class="header-menu__logo"></i>
            </div>
            <ul class="header-menu__list header-menu__list--secondary hidden-xs js-header-list">
               <li class="js-header-menu__item"><a href="#js-conception"><span><span>Концепция</span></span> </a></li>
                <li class="js-header-menu__item"><a href="#js-geography"><span><span>География</span></span></a></li>
                <li class="js-header-menu__item"><a href="#js-pr-line"><span><span>Товарная линейка</span></span></a></li>
                <li class="js-header-menu__item"><a href="#js-advantages"><span><span>Преимущества</span></span></a></li>
                <li class="js-header-menu__item"><a href="#js-franchisee"><span><span>Как стать франчайзи</span></span></a></li>
                <li class="js-header-menu__item"><a href="#js-contacts"><span><span>Контакты</span></span></a></li>
            </ul>
            <button class="btn header-menu__order header-menu__order--secondary hidden-xs js-call-only">Заказать звонок</button>
            <div class="header-menu__mob-content-wrap visible-xs">
                <i class="header-menu__icon-mob header-menu__icon-center js-call-only">Заказать <br>звонок</i>
                <i class="header-menu__icon-right header-menu__icon-hamburger"  id="js-hamburger"></i>
            </div>
        </div>
    </header>

    <div class="franchise-wrap">
        <h2 class="franchise__title">Франшиза автосалонов автомобилей с пробегом</h2>
        <p class="franchise__subtitle">Ваша чистая прибыль <br class="visible-xs"> от $2 000 до $25 000 в месяц</p>
        <div class="franchise__btn-wrap">
            <div class="pull-left">
                
                
            </div>
            <div class="btn-annotation--pink-wrap pull-right">
                <button class="btn btn-annotation btn-annotation--pink btn-annotation--fr" id="js-consultation">Заказать консультацию</button>

            </div>
        </div>
        <!--<img src="img/franchise/mercedes-main.jpg" alt="" class="img-responsive franchise__main-img hidden-xs" width="948">
        <img src="img/franchise/mob-mercedes.png" alt="" class="franchise__main-img visible-xs" width="311">
        -->
        <div class="img-wrap">
        <picture>
          <source srcset="img/franchise/mercedes-main.jpg" media="(min-width: 768px)">
          <img srcset="img/franchise/mob-mercedes.png" alt="" class="franchise__main-img">
        </picture>
        </div>
        <div class="franchise-el">
            <p class="franchise__prefix-title" id="js-conception"><b>Концепция</b></p>
            <h2 class="franchise__title-primary franchise__title-primary--conception">Готовое бизнес-решение инновационного
салона автомобилей с пробегом</h2>
            <p class="franchise__descr">За 9 лет работы, компания Autopark заслужила доверие и смогла вывести процесс продажи, покупки или обмена автомобиля на качественно новый уровень. Мы делаем приобретение хорошего автомобиля более доступным, взяв на себя решение проблем, с которыми сталкивается покупатель.</p>

            <div class="franchise__blockquote franchise__mission-wrap" id="js-mission">
                <div class="franchise__mission-inner">
                    <div class="franchise__mission">
                        <h3 class="franchise__prefix-title franchise__prefix-title--mission">Наша Миссия</h3>
                        <p class="franchise__descr-primary franchise__descr--blockquote">Улучшать и облегчать жизненный путь людей, сделав продажу, обмен или покупку хорошего автомобиля привычным и простым процессом</p>
                    </div>
                </div>
            </div>
            <div class="franchise__achivement-wrap">
                <h3 class="franchise__descr-primary">Наши Достижения</h3>
                <ul class="franchise__achivement-list">
                    <li>
                        <div class="franchise__achivement-figure"><b>7<span class="visible-xs"> дней</span></b></div>
                        <p class="franchise__achivement-descr"><span class="hidden-xs">Дней – </span>средний
                            <br class="hidden-xs"> срок реализации авто</p>
                    </li>
                    <li>
                        <div class="franchise__achivement-figure"><b>8<span class="visible-xs"> салонов</span></b></div>
                        <p class="franchise__achivement-descr"><span class="visible-xs">С авто </span><span class="hidden-xs">Автосалонов</span>
                            <br class="hidden-xs"> по всей Украине</p>
                    </li>
                    <li>
                        <div class="franchise__achivement-figure"><b>9<span class="visible-xs"> лет</span></b></div>
                        <p class="franchise__achivement-descr"><span class="hidden-xs">Лет</span> успешной
                            <br class="hidden-xs"> работы на рынке</p>
                    </li>
                    <li>
                        <div class="franchise__achivement-figure"><b>55.000</b></div>
                        <p class="franchise__achivement-descr">Автомобилей продано</p>
                    </li>
                    <li>
                        <div class="franchise__achivement-figure"><b>100.000</b></div>
                        <p class="franchise__achivement-descr">Довольных клиентов</p>
                    </li>
                </ul>
            </div>
            <div class="franchise__geography-wrap">
                <p class="franchise__prefix-title" id="js-geography"><b>География сети</b></p>
                <h2 class="franchise__title-primary">За 9 лет мы открыли <br class="visible-xs"> 8 автосалонов <br class="hidden-xs"> по <br class="visible-xs"> всей Украине</h2>
                <div class="franchise__geography">
                    <ul class="franchise__geography-list">
                        <li class="franchise__geography-item">
                            <div class="franchise__geography-item-inner">
                                <div class="franchise__geography-year">2014 <span>Г</span></div>
                                <p class="franchise__geography-descr">Открытие филиала
                                    <br>в Запорожье и Киеве</p>
                            </div>
                        </li>
                        <li class="franchise__geography-item">
                            <div class="franchise__geography-item-inner">
                                <div class="franchise__geography-year">2015 <span>Г</span></div>
                                <p class="franchise__geography-descr">Открытие филиала <br class="visible-xs"> в Харькове
                                    <br class="hidden-xs"> и Одессе</p>
                            </div>
                        </li>
                        <li class="franchise__geography-item">
                            <div class="franchise__geography-item-inner">
                                <div class="franchise__geography-year">2016 <span>Г</span></div>
                                <p class="franchise__geography-descr">Открытие филиала в Кривом Роге и
                                    <br class="hidden-xs"> Днепропетровске, <br class="visible-xs"> а также открытие
                                    <br class="hidden-xs">первого франчайзингового <br class="visible-xs"> салона
                                    <br class="hidden-xs">в Полтаве</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="franchise-el franchise-el--secondary">
            <p class="franchise__prefix-title" id="js-pr-line"><b>Товарная линейка</b></p>
            <h2 class="franchise__title-primary">Мы занимаемся продажей, покупкой и обменом широкого спектра транспортных средств</h2>
             <div class="franchise__pr-line-wrap">
                <div class="swiper-container franchise__pr-line-swiper visible-xs" id="js-swiper-pr-line">
                    <ul class="swiper-wrapper franchise__pr-line-list franchise__pr-line-list--swiper">
                        <li class="swiper-slide">
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--half">
                                <p class="franchise__pr-line-descr"><b>Легковые</b></p>
                                <img src="img/franchise/1-car.jpg" alt="" class="img-responsive" width="140">
                            </div>
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--half">
                                <p class="franchise__pr-line-descr"><b>Грузовые</b></p>
                                <img src="img/franchise/2-car.jpg" alt="" class="img-responsive" width="130"></div>
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--half">
                                <p class="franchise__pr-line-descr"><b>Спецтехника</b></p>
                                <img src="img/franchise/3-car.jpg" alt="" class="img-responsive" width="132"></div>
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--half">
                                <p class="franchise__pr-line-descr"><b>Мототехника</b></p>
                                <img src="img/franchise/4-car.jpg" alt="" class="img-responsive" width="120"></div>
                        </li>
                        <li class="swiper-slide">
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--primary">
                                <p class="franchise__pr-line-descr"><b>Автобусы</b></p>
                                <img src="img/franchise/6-car.jpg" alt="" class="img-responsive" width="211"></div>
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--primary">
                                <p class="franchise__pr-line-descr"><b>Автодом</b></p>
                                <img src="img/franchise/8-car.jpg" alt="" class="img-responsive" width="189"></div>
                        </li>
                        <li class="swiper-slide">
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--secondary">
                                <p class="franchise__pr-line-descr"><b>Водный транспорт</b></p>
                                <img src="img/franchise/5-car.jpg" alt="" class="img-responsive" width="200"></div>
                            <div class="franchise__pr-line-swiper-item franchise__pr-line-swiper-item--secondary">
                                <p class="franchise__pr-line-descr"><b>Небольшие самолеты</b></p>
                                <img src="img/franchise/7-car.jpg" alt="" class="img-responsive" width="199"></div>
                        </li>
                    </ul>
                    <div class="swiper-nav-wrap">
                        <div class="swiper-button-prev" id="js-swiper-pr-line-prev"></div>
                        <div class="swiper-pagination" id="js-swiper-pr-line-pagination"></div>
                        <div class="swiper-button-next" id="js-swiper-pr-line-next"></div>
                    </div>
                </div>
                <ul class="franchise__pr-line-list hidden-xs">
                    <li>
                        <p class="franchise__pr-line-descr"><b>Легковые</b></p>
                        <img src="img/franchise/1-car.jpg" alt="" class="img-responsive" width="194">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Грузовые</b></p>
                        <img src="img/franchise/2-car.jpg" alt="" class="img-responsive" width="183">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Спецтехника</b></p>
                        <img src="img/franchise/3-car.jpg" alt="" class="img-responsive" width="188">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Мототехника</b></p>
                        <img src="img/franchise/4-car.jpg" alt="" class="img-responsive" width="167">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Водный транспорт</b></p>
                        <img src="img/franchise/5-car.jpg" alt="" class="img-responsive" width="277">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Автобусы</b></p>
                        <img src="img/franchise/6-car.jpg" alt="" class="img-responsive" width="291">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Небольшие самолеты</b></p>
                        <img src="img/franchise/7-car.jpg" alt="" class="img-responsive" width="276">
                    </li>
                    <li>
                        <p class="franchise__pr-line-descr"><b>Автодом</b></p>
                        <img src="img/franchise/8-car.jpg" alt="" class="img-responsive" width="261">
                    </li>
                </ul>

                <div class="franchise__blockquote franchise__pr-line-price">
                    <div class="franchise__blockquote-inner">
                        <h3 class="franchise__descr-primary franchise__descr-primary--blockquote">Ценовая Политика</h3>
                        <p class="franchise__descr-primary franchise__descr--blockquote">Формируется исходя из спроса и предложения на рынке, с учетом финансового интереса представительства
                           <span class="hidden-xs"> <br class="hidden-md"> и пожеланий владельца автомобиля</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p class="franchise__prefix-title" id="js-advantages"><b>преимущества</b></p>
            <h2 class="franchise__title-primary">В чем выгоды <br class="visible-xs"> бизнес-модели Autopark?</h2>
            <ul class="franchise__advantages-list-icon franchise__advantages-list-icon--inactive visible-xs">
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/house--2-.jpg" alt="" class="img-responsive" width="73">
                        <p class="franchise__advantages-list-icon-descr">Полноформатный
                            <br>салон автомобилей 
                            <br>с пробегом для
                            <br>широкого круга потребителей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/team--1-.png" alt="" class="img-responsive" width="56">
                        <p class="franchise__advantages-list-icon-descr">Узнаваемость среди
                            <br>покупателей,
                            <br>собственников авто
                            <br>и добросовестных
                            <br>перекуп-групп
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/deal.png" alt="" class="img-responsive" width="56">
                        <p class="franchise__advantages-list-icon-descr">Доверие,
                            <br> проверенное более
                            <br>чем 9-летней
                            <br> историей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/car--1-.png" alt="" class="img-responsive" width="75">
                        <p class="franchise__advantages-list-icon-descr">Большой пул
                            <br>автомобилей по
                            <br>стране с возможной
                            <br>доставкой
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/auto-repair-service.png" alt="" class="img-responsive" width="56">
                        <p class="franchise__advantages-list-icon-descr">Высокий уровень
                            <br>сервиса, достойный
                            <br>элитных автосалонов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/map-ukraine-small.png" alt="" class="img-responsive" width="82">
                        <p class="franchise__advantages-list-icon-descr">Масштабность сети –
                            <br>8 действующих
                            <br>автосалонов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/man-strategy.png" alt="" class="img-responsive" width="73">
                        <p class="franchise__advantages-list-icon-descr">Сформированная
                            <br>стратегия работы
                            <br>с клиентами
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/computer.png" alt="" class="img-responsive" width="46">
                        <p class="franchise__advantages-list-icon-descr">Полная
                            <br>автоматизация
                            <br>бизнес-процессов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/folder.png" alt="" class="img-responsive" width="84">
                        <p class="franchise__advantages-list-icon-descr">Единая проверенная
                            <br>база автомобилей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/businessman.png" alt="" class="img-responsive" width="75">
                        <p class="franchise__advantages-list-icon-descr">Репутация надежного
                            <br> партнера
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/10.png" alt="" class="img-responsive" width="65">
                        <p class="franchise__advantages-list-icon-descr">Программа Trade-In</p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/car--4-.png" alt="" class="img-responsive" width="98">
                        <p class="franchise__advantages-list-icon-descr">Честная дефектовка</p>
                    </div>
                </li>
            </ul>
            <div class="franchise__advantages-show-more visible-xs js-advantages-show-more">показать все (ещё 6)</div> 
            <ul class="franchise__advantages-list-icon hidden-xs">
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/auto-repair-service.png" alt="" class="img-responsive" width="64">
                        <p class="franchise__advantages-list-icon-descr">Высокий уровень сервиса, достойный элитных
                            <br> автосалонов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/house--2-.jpg" alt="" class="img-responsive" width="87">
                        <p class="franchise__advantages-list-icon-descr">Полноформатный салон автомобилей с пробегом
                            <br> для широкого круга
                            <br> потребителей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/map-ukraine-small.png" alt="" class="img-responsive" width="104">
                        <p class="franchise__advantages-list-icon-descr">Масштабность сети –
                            <br> 8 действующих
                            <br> автосалонов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/car--1-.png" alt="" class="img-responsive" width="106">
                        <p class="franchise__advantages-list-icon-descr">Большой пул автомобилей
                            <br> по стране с возможной
                            <br> доставкой
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/team--1-.png" alt="" class="img-responsive" width="77">
                        <p class="franchise__advantages-list-icon-descr">Узнаваемость среди
                            <br>покупателей, собственников
                            <br>авто и добросовестных
                            <br>перекуп-групп
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/deal.png" alt="" class="img-responsive" width="74">
                        <p class="franchise__advantages-list-icon-descr">Доверие, проверенное
                            <br>более чем 9-летней
                            <br> историей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/businessman.png" alt="" class="img-responsive" width="107">
                        <p class="franchise__advantages-list-icon-descr">Репутация надежного
                            <br> партнера
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/man-strategy.png" alt="" class="img-responsive" width="101">
                        <p class="franchise__advantages-list-icon-descr">Сформированная стратегия
                            <br>работы с клиентами</p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/folder.png" alt="" class="img-responsive" width="115">
                        <p class="franchise__advantages-list-icon-descr">Единая проверенная база автомобилей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/10.png" alt="" class="img-responsive" width="90">
                        <p class="franchise__advantages-list-icon-descr">Программа Trade-In</p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/computer.png" alt="" class="img-responsive" width="65">
                        <p class="franchise__advantages-list-icon-descr">Полная автоматизация
                            <br>бизнес-процессов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item">
                        <img src="img/franchise/icons/car--4-.png" alt="" class="img-responsive" width="131">
                        <p class="franchise__advantages-list-icon-descr">Честная дефектовка</p>
                    </div>
                </li>
            </ul>

           <ol class="franchise__advantages-list-secondary">
                <li>
                    <div class="franchise__advantages-item-secondary">
                        <h3 class="franchise__advantages-list-secondary-title">Преимущества франшизы</h3>
                        <p class="franchise__descr-secondary">Франчайзинговый бизнес –
                            <br class="visible-xs">это меньше риска
                            <br class="hidden-md">и ошибок, быстрый результат и больше прибыли.
                            <br class="hidden-md">А бизнес в сфере авторитейла – перспективное
                            <br class="hidden-md">
                            <br class="visible-xs">и стабильно востребованное направление
                            <br class="hidden-md">во все времена.</p>
                    </div>
                </li>
                <li>
                    <div class="franchise__advantages-item-secondary">
                        <h3 class="franchise__advantages-list-secondary-title">Успешное ведение бизнеса</h3>
                        <p class="franchise__descr-secondary">Autopark – это быстрое, эффективное
                            <br class="hidden-md">и надежное включение в собственный
                            <br class="hidden-md">бизнес по франшизе, основанный
                            <br class="hidden-md">на успешном
                            <br class="visible-xs">опыте построения
                            <br class="hidden-md">собственной сети автосалонов.</p>
                    </div>
                </li>
            </ol>

            <div class="franchise-el franchise-el--primary">
                <h2 class="franchise__title-primary">Финансовые Показатели</h2>
                <div class="btn-annotation--pink-wrap btn-annotation--wrap-fr-sec" id="js-financial__find-more">
                    <button class="btn btn-annotation btn-annotation--pink btn-annotation--fr-sec">Узнать финанс<span class="visible-xs">.</span><span class="hidden-xs">овые</span> показатели</button>
                </div>
                <div class="franchise__financial-list-wrap">
                    <ul class="franchise__financial-list">
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Паушальный взнос</b></div>
                                <p class="franchise__financial-list-descr">Вступительный взнос, разово</p>
                            </div>
                            <div class="franchise__financial-list-total"><b>$10 000</b></div>
                        </li>
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Инвестиции на <br class="visible-xs"> этапе запуска</b></div>
                                <p class="franchise__financial-list-descr">Без учета паушального взноса</p>
                            </div>
                            <div class="franchise__financial-list-total"><b>$3 496</b></div>
                        </li>
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Ежемесячный <br class="visible-xs"> размер роялти</b></div>
                                <p class="franchise__financial-list-descr">Включает сервисный платеж</p>
                            </div>
                            <div class="franchise__financial-list-total"><b>$2 800</b></div>
                        </li>
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Среднемесячная <br class="visible-xs"> чистая прибыль</b></div>
                            </div>
                            <div class="franchise__financial-list-total"><b>> $2 000</b></div>
                        </li>
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Выход на <br class="visible-xs"> самоокупаемость</b></div>
                            </div>
                            <div class="franchise__financial-list-total"><b>с 4-го месяца</b></div>
                        </li>
                        <li>
                            <div>
                                <div class="franchise__financial-list-title"><b>Окупаемость <br class="visible-xs"> инвестиций</b></div>
                            </div>
                            <div class="franchise__financial-list-total"><b>от 8-и месяцев</b></div>
                        </li>
                    </ul>
                </div>

                
                <div>
                    <h2 class="franchise__title-primary">Поддержка Франчайзера</h2>

                      <ul class="franchise__support-list">
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Уникальное готовое ПО, позволяющее контролировать бизнес-процессы представительства
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Отладка механизма работы салона
                                    <br class="hidden-xs">(работа команды  <br class="visible-xs"> запуска
                                    <br class="hidden-xs"> франчайзера)
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Макеты рекламных  <br class="visible-xs"> материалов для
                                    <br class="hidden-xs"> проведения брендирования салона</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Обучение поиску, подбору <br class="visible-xs">и вводу
                                    <br class="hidden-xs">в должность персонала</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Обучение франчайзи управленческим
                                    <br class="hidden-xs">навыкам
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Консультирование по всем текущим
                                    <br class="hidden-xs"> вопросам
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Централизованная маркетинговая
                                    <br class="hidden-xs"> поддержка
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Помощь в подборе <br class="visible-xs"> и оценке
                                    <br class="hidden-xs">помещения
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Обучение менеджеров <br class="visible-xs"> по продажам
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Услуги корпоративного call-центра</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Услуги контент-менеджмента</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="franchise__support-list-descr">Сайт, хостинг, поддержка</p>
                            </div>
                        </li>
                    </ul>
                     <div class="franchise__advantages-show-more franchise__advantages-show-more--support visible-xs js-advantages-show-more">показать все (ещё 8)</div>
                </div>

                <div>
                    <h2 class="franchise__title-primary">Руководство <br class="visible-xs"> по ведению бизнеса</h2>
                    <ol class="franchise__guide-list">
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr">Руководство по
                                    <br class="hidden-md"> оформлению салона</p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr">Финансовая модель
                                    <br class="hidden-md"> развития бизнеса</p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr">Маркетинговая
                                    <br> политика
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr franchise__guide-descr--secondary">Управление персоналом</p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr franchise__guide-descr--secondary">Бизнес-процессы</p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr franchise__guide-descr--secondary">Брендбук</p>
                            </div>
                        </li>
                        <li>
                            <div class="franchise__guide-content">
                                <p class="franchise__guide-content-inner"></p>
                                <p class="franchise__guide-descr franchise__guide-descr--last">Юридическое оформление франчайзингового партнерства и  <br class="visible-xs"> дальнейшая поддержка</p>
                            </div>
                        </li>
                    </ol>


                </div>
            </div>
        </div>
        <div class="img-wrap">
        <picture>
          <source srcset="img/franchise/branding.png" media="(min-width: 768px)">
          <img srcset="img/franchise/branding.xs.png" alt="" class="img-responsive franchise__img-branding" width="306">
        </picture>
        </div>
        <div class="franchise-el franchise-el--primary">
            <div>
                <p class="franchise__prefix-title" id="js-franchisee"><b>Как стать франчайзи</b></p>
                <h2 class="franchise__title-primary">10 шагов на пути к быстрому старту 
                <br class="hidden-xs"> вашего собственного Autopark</h2>
                 <ol class="franchise__step-list">
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Обратиться к нам и оставить заявку на покупку франшизы</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Подписать договор и оплатить вступительный взнос</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Подобрать помещение <br class="visible-xs">(за нами – экспертная оценка)</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Провести ремонт и брендирование салона, офиса</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Установить необходимое оборудование</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Подобрать и обучить  <br class="visible-xs"> персонал</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Организовать товарное наполнение</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Провести рекламную <br class="visible-xs"> кампанию запуска</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Осуществить торжественное открытие салона</p>
                    </li>
                    <li>
                        <p class="franchise__step-inner"></p>
                        <p class="franchise__step-descr">Эффективно и прибыльно работать</p>
                    </li>
                </ol>

                <h2 class="franchise__title-primary">Общие требования к размещению салона</h2>
                  <ul class="franchise__requirment-list">
                       <li>
                        <p class="franchise__requirment-descr">Возможность монтажа <br class="visible-xs">
                             наружной рекламы</p>
                    </li>
                    <li>
                        <p class="franchise__requirment-descr">Широкий вход для заезда <br class="visible-xs">
                             и выезда автомобилей</p>
                    </li>
                    <li>
                        <p class="franchise__requirment-descr">Города с населением
                            <br> от 100 000 человек</p>
                    </li>
                    <li>
                        <p class="franchise__requirment-descr">Фасадная территория в легкодоступной местности
                            <br class="hidden-md"> города (желательно
                            <br class="visible-xs"> фасадный от 600 м²)</p>
                    </li>
                    <li>
                        <p class="franchise__requirment-descr">Офисное помещение от 20 м² (это может быть МАФ,
                            <br class="visible-xs"> автосалон или другое офисное помещение, находящееся на территории представительства)</p>
                    </li>
                </ul>


                <h2 class="franchise__title-primary">Пожелания к партнерам Autopark</h2>
                 <ol class="franchise__wishing-list">
                    <li>
                        <p class="franchise__wishing-descr">Готовность обучаться, непрерывно развиваться и быстро адаптироваться
                            <br class="hidden-xs"> под <br class="visible-xs"> изменения рынка</p>
                    </li>
                    <li>
                        <p class="franchise__wishing-descr">Желательно наличие территории
                            <br class="hidden-xs">с помещением (арендованного или своего)
                        </p>
                    </li>
                    <li>
                        <p class="franchise__wishing-descr">Взаимодоверие, ответственный
                            <br> подход к бизнесу</p>
                    </li>
                    <li>
                        <p class="franchise__wishing-descr">Необходимые инвестиционные возможности
                        </p>
                    </li>
                    <li>
                        <p class="franchise__wishing-descr">Соблюдение стандартов
                            <br>работы
                        </p>
                    </li>
                    <li>
                        <p class="franchise__wishing-descr">Активное участие в развитии
                            <br> бренда сети</p>
                    </li>
                </ol>
            </div>


            <div>
                <p class="franchise__prefix-title" id="js-contacts"><b>Контакты</b></p>
                <h2 class="franchise__title-primary">
Свяжитесь с нами  и <br class="visible-xs"> начните развивать <br>
свой успешный <br class="visible-xs"> автобизнес</h2>

                <div class="franchise__contacts-wrap">
                    <div class="franchise__contacts">
                        <div class="franchise__contacts-tel">
                            <h3 class="franchise__contacts-title">Максимец Дарья Леонидовна</h3>
                            <p class="franchise__contacts-descr">Контактное лицо по вопросам
                                <br> приобретения франшизы</p>
                            <div class="franchise__contacts-link-wrap">
                                <h3 class="franchise__prefix-title franchise__prefix-title--secondary"><b>Телефоны</b></h3>
                                <a href="at" rel="nofollow" onclick="this.href='tel:' + '+' + '380509463376'">+38 (050) 946-33-76</a>
                                <a href="at" rel="nofollow" onclick="this.href='tel:' + '+' + '380980085808'"> +38 (098) 008-58-08</a>
                            </div>
                        </div>
                        <div class="franchise__contacts-net">
                            <h3 class="franchise__prefix-title franchise__prefix-title--secondary"><b>e-mail</b></h3>
                            <a href="at" rel="nofollow" onclick="this.href='mailto:' + 'dariya' + '@' + 'autopark.ua'">dariya@autopark.ua</a>
                            <h3 class="franchise__prefix-title franchise__prefix-title--secondary franchise__contacts--line"><b>Skype</b></h3>
                            <a href="at" rel="nofollow" onclick="this.href='skype:' + 'velerry?add'">velerry</a>
                        </div>
                    </div>
                    <ul class="franchise__contacts-list">
                        <li><a href="https://www.facebook.com/autopark.ukraine" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://vk.com/autopark.ukraine" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                        <li><a href="https://ok.ru/autopark?st._aid=ExternalGroupWidget_OpenGroup" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/109031951636628999842" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCBjaHAbLy0Z8ycgZaB_lsXA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <footer class="footer">

                <div class="pull-left">© 2017 Autopark.ua</div>
                <div class="link-qwert-wrap pull-right">Разработка сайта <a href="http://qwert.com.ua" class="link-qwert" target="_blank">QWERT-Media</a></div>

            </footer>
            <button class="btn to-up fly-up hidden-xs" id="js-up"></button>
        </div>
    </div>


    <div class="modal-window" id="js-modal__consultation">
        <div class="modal-window__overlay"></div>
        <div class="modal-window__content modal-window__content--order">
            <div class="modal-close">
                <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
                    <path class="modal-close__icon-path" d="M14.44 12.143l9.44-9.31c.59-.575.59-1.513 0-2.092-.59-.578-1.54-.578-2.12 0l-9.44 9.31L2.88.74C2.29.163 1.34.163.76.74c-.59.58-.59 1.518 0 2.094l9.44 9.31L.76 21.45c-.59.577-.59 1.515 0 2.093.29.29.67.434 1.06.434.38 0 .77-.146 1.06-.435l9.44-9.31 9.44 9.31c.29.29.68.434 1.06.434s.77-.146 1.06-.435c.59-.578.59-1.516 0-2.093z" fill="#fff" />
                </svg>
            </div>
            <div class="modal-window__inner modal-window__inner--order">
                
            </div>
        </div>
    </div>

   <div class="modal-window" id="js-modal-call">
        <div class="modal-window__overlay"></div>
        <div class="modal-window__content modal-window__content--order">
            <div class="modal-close">
                <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
                    <path class="modal-close__icon-path" d="M14.44 12.143l9.44-9.31c.59-.575.59-1.513 0-2.092-.59-.578-1.54-.578-2.12 0l-9.44 9.31L2.88.74C2.29.163 1.34.163.76.74c-.59.58-.59 1.518 0 2.094l9.44 9.31L.76 21.45c-.59.577-.59 1.515 0 2.093.29.29.67.434 1.06.434.38 0 .77-.146 1.06-.435l9.44-9.31 9.44 9.31c.29.29.68.434 1.06.434s.77-.146 1.06-.435c.59-.578.59-1.516 0-2.093z" fill="#fff" />
                </svg>
            </div>
            <div class="modal-window__inner modal-window__inner--order">
                @include ('front.forms.callbackform')
                <!-- <h2 class="modal-window__title modal-window__title--order">Заказ звонка</h2>
                <p class="modal-window__descr modal-window__descr--order">
                    Заказ звонка возможен круглосуточно.
                    <br> Менеджер перезвонит Вам с 10:00 до 19:00
                    <br> по киевскому времени.</p>
                <form class="modal-window__form" id="js-modal-form--call">
                    <div class="form__input-wrap form__input-wrap--modal">
                        <input class="form__input" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="form__input-wrap form__input-wrap--modal">
                        <input class="form__input" type="tel" name="phone" placeholder="Номер телефона">
                    </div>
                    <div class="text-align">
                        <button class="btn btn--primary form__submit">Отправить</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
   
    <div class="modal-window" id="js-modal__success-presentation">
        <div class="modal-window__overlay"></div>
        <div class="modal-window__content modal-window__content--success">
            <div class="modal-close  modal-close--success-error">
                <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
                    <path class="modal-close__icon-path" d="M14.44 12.143l9.44-9.31c.59-.575.59-1.513 0-2.092-.59-.578-1.54-.578-2.12 0l-9.44 9.31L2.88.74C2.29.163 1.34.163.76.74c-.59.58-.59 1.518 0 2.094l9.44 9.31L.76 21.45c-.59.577-.59 1.515 0 2.093.29.29.67.434 1.06.434.38 0 .77-.146 1.06-.435l9.44-9.31 9.44 9.31c.29.29.68.434 1.06.434s.77-.146 1.06-.435c.59-.578.59-1.516 0-2.093z" fill="#fff" />
                </svg>
            </div>
            <div class="modal-window__inner modal-window__inner--success">
                <h2 class="modal-window__title">Спасибо за заявку!</h2>
                <p class="modal-window__descr">Мы выслали презентацию на указанный
                    <br> адрес электронной почты</p>
                <img src="img/logo@2x.png" alt="" class="img-responsive modal-window__img-logo" width="128">
            </div>
        </div>
    </div>


    <div class="modal-window" id="js-modal__success">
        <div class="modal-window__overlay"></div>
        <div class="modal-window__content modal-window__content--success">
            <div class="modal-close  modal-close--success-error">
                <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
                    <path class="modal-close__icon-path" d="M14.44 12.143l9.44-9.31c.59-.575.59-1.513 0-2.092-.59-.578-1.54-.578-2.12 0l-9.44 9.31L2.88.74C2.29.163 1.34.163.76.74c-.59.58-.59 1.518 0 2.094l9.44 9.31L.76 21.45c-.59.577-.59 1.515 0 2.093.29.29.67.434 1.06.434.38 0 .77-.146 1.06-.435l9.44-9.31 9.44 9.31c.29.29.68.434 1.06.434s.77-.146 1.06-.435c.59-.578.59-1.516 0-2.093z" fill="#fff" />
                </svg>
            </div>
            <div class="modal-window__inner modal-window__inner--success">
                <h2 class="modal-window__title modal-window__title--secondary">Спасибо за заявку!</h2>
                <p class="modal-window__descr">
                    Наш менеджер свяжется с Вами
                    <br> в ближайшее время.</p>
                <img src="img/logo@2x.png" alt="" class="img-responsive modal-window__img-logo" width="128">
            </div>
        </div>
    </div>

    <div class="modal-window" id="js-modal__error">
        <div class="modal-window__overlay"></div>
        <div class="modal-window__content modal-window__content--error">
            <div class="modal-close modal-close--success-error">
                <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
                    <path class="modal-close__icon-path" d="M14.44 12.143l9.44-9.31c.59-.575.59-1.513 0-2.092-.59-.578-1.54-.578-2.12 0l-9.44 9.31L2.88.74C2.29.163 1.34.163.76.74c-.59.58-.59 1.518 0 2.094l9.44 9.31L.76 21.45c-.59.577-.59 1.515 0 2.093.29.29.67.434 1.06.434.38 0 .77-.146 1.06-.435l9.44-9.31 9.44 9.31c.29.29.68.434 1.06.434s.77-.146 1.06-.435c.59-.578.59-1.516 0-2.093z" fill="#fff" />
                </svg>
            </div>
            <div class="modal-window__inner modal-window__inner--error">
                <h2 class="modal-window__title modal-window__title--secondary">Что-то пошло не так …</h2>
                <p class="modal-window__descr">Перезагрузите страницу <br class="visible-xs"> и попробуйте еще раз.</p>
                <img src="img/logo@2x.png" alt="" class="img-responsive modal-window__img-logo" width="128">
            </div>
        </div>
    </div>

    <div class="header-list__wrap visible-xs" id="js-menu-xs">
    <div class="modal-close modal-close--header pull-right">
        <svg class="modal-close__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 25 24">
            <path d="M14.44 12.14l9.44-9.3c.59-.58.59-1.52 0-2.1a1.52 1.52 0 0 0-2.12 0l-9.44 9.3L2.88.75a1.52 1.52 0 0 0-2.12 0 1.47 1.47 0 0 0 0 2.1l9.44 9.3-9.44 9.3a1.47 1.47 0 0 0 0 2.1 1.51 1.51 0 0 0 2.12 0l9.44-9.3 9.44 9.3a1.51 1.51 0 0 0 2.12 0c.59-.58.59-1.51 0-2.1z" />
        </svg>
    </div>
    <ul class="header-menu__list header-menu__list--secondary js-header-list">
        <li class="js-header-menu__item"><a href="#js-conception"><span>Концепция</span> </a></li>
        <li class="js-header-menu__item"><a href="#js-mission"><span>наша миссия</span></a></li>
        <li class="js-header-menu__item"><a href="#js-geography"><span>география сети</span></a></li>
        <li class="js-header-menu__item"><a href="#js-pr-line"><span>Товарная линейка</span></a></li>
        <li class="js-header-menu__item"><a href="#js-advantages"><span>Преимущества</span></a></li>
        <li class="js-header-menu__item"><a href="#js-franchisee"><span>Как стать франчайзи</span></a></li>
        <li class="js-header-menu__item"><a href="#js-contacts"><span>Контакты</span></a></li>
    </ul>
</div>
   
    <script src="{{ asset('js/vendor_output/vendor.min.js') }}"></script>
    <script src="{{ asset('js/custom/bundle.js') }}"></script>
    {!! counters('end_body') !!}
</body>

</html>