@extends('layout')

@section('content')
    <!-- Demo styles -->
    {{--    <style>--}}
    {{--        html,--}}
    {{--        body {--}}
    {{--            position: relative;--}}
    {{--            height: 100%;--}}
    {{--        }--}}

    {{--        body {--}}
    {{--            background: #eee;--}}
    {{--            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;--}}
    {{--            font-size: 14px;--}}
    {{--            color: #000;--}}
    {{--            margin: 0;--}}
    {{--            padding: 0;--}}
    {{--        }--}}

    {{--        .swiper {--}}
    {{--            width: 100%;--}}
    {{--            padding-top: 50px;--}}
    {{--            padding-bottom: 50px;--}}
    {{--        }--}}

    {{--        .swiper-slide {--}}
    {{--            background-position: center;--}}
    {{--            background-size: cover;--}}
    {{--            width: 300px;--}}
    {{--            height: 600px;--}}
    {{--        }--}}

    {{--        .swiper-slide img {--}}
    {{--            display: block;--}}
    {{--            width: 100%;--}}
    {{--        }--}}
    {{--    </style>--}}



    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/find-logo.png',
                    'title' => 'finddistrict.ru',
                    'text' => 'Разработал сервис для поиска района города по адресу.',
                    'link' => 'http://finddistrict.ru/',
                    'gitHubLink' => 'https://github.com/MultyPony/finddistrict.ru',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/editus-logo.png',
                    'title' => 'editus.ru',
                    'text' => 'Разработал редактор обложки книги, с помощью которого пользователь может
                            создать pdf, готовый для печати в типографии. Добавил виджет СДЭК для выбора пункта выдачи заказа.',
                    'link' => 'https://editus.ru/',
                    'gitHubLink' => 'https://github.com/MultyPony/editus-cover-editor',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/novastar-logo.jpg',
                    'title' => 'nova-cleaning70.ru',
                    'text' => 'Разработал плагин для WordPress, который добавляет на сайт страницу оформления заказа в 3 шага, калькулятор стоимости заказа и простейшую админ-панель. Адаптировал для мобильных устройств.',
                    'link' => 'http://i95076by.beget.tech/calc/',
                    'gitHubLink' => 'https://github.com/MultyPony/nova-step-plugin',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/maxxpricelogo.png',
                    'title' => 'maxxprice.ru',
                    'text' => "Написал простейший telegram bot, задача которого транслировать своим подписчикам данные, введённые пользователем на сайте.<br><a href='https://t.me/MaxxPriceBot'>@MaxxPriceBot</a> (telegram bot)",
                    'link' => 'https://maxxprice.herokuapp.com/',
                    'gitHubLink' => 'https://github.com/MultyPony/maxxprice-ru',
                ])

            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/ufm-logo.jpg',
                    'title' => 'ufmgroup.ru',
                    'text' => 'Починил форму заказа плагина WooCommerce для WordPress. Добавил календарь для выбора количества дней аренды.',
                    'link' => 'https://ufmgroup.ru/',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/coffeeinbox-logo.svg',
                    'title' => 'coffeeinbox.ru',
                    'text' => 'Внес изменения в вёрстку сайта на стеке ASP.NET MVC / Angular SSR. Починил отправку email при оформлении заказа.',
                    'link' => 'http://coffeeinbox.ru/',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/rss-logo.jpg',
                    'title' => 'rss24.ru',
                    'text' => 'Сверстал сайт по макетам и натянул эту вёрстку на CMS Modx. Добавил js
                            слайдер и модальные окна.',
                    'link' => 'http://rss24.ru/',
                ])
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="oi4kW6_j" data-limit="5"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
