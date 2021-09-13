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
                    'imgSrc' => 'img/editus-logo.png',
                    'title' => 'editus.ru',
                    'text' => 'Разработал редактор обложки книги, с помощью которого пользователь может
                            создать pdf, готовый для печати в типографии.',
                    'link' => 'https://editus.ru/',
                    'gitHubLink' => 'https://github.com/MultyPony/editus-cover-editor',
                ])
            </div>
            <div class="col mb-4 d-flex">
                @include('components.case-card', [
                    'imgSrc' => 'img/rss-logo.jpg',
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
{{--        <div class="row">--}}
{{--            <!-- Swiper -->--}}
{{--            <div class="swiper mySwiper">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col mb-4 d-flex">--}}
{{--                                    @include('components.case-card', [--}}
{{--                                        'imgSrc' => 'img/editus-logo.png',--}}
{{--                                        'title' => 'editus.ru',--}}
{{--                                        'text' => 'Разработал редактор обложки книги, с помощью которого пользователь может--}}
{{--                                                создать pdf, готовый для печати в типографии.',--}}
{{--                                        'link' => 'https://editus.ru/',--}}
{{--                                        'gitHubLink' => 'https://github.com/MultyPony/editus-cover-editor',--}}
{{--                                    ])--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-slide">Slide 2</div>--}}
{{--                    <div class="swiper-slide">Slide 3</div>--}}
{{--                    <div class="swiper-slide">Slide 4</div>--}}
{{--                    <div class="swiper-slide">Slide 5</div>--}}
{{--                    <div class="swiper-slide">Slide 6</div>--}}
{{--                    <div class="swiper-slide">Slide 7</div>--}}
{{--                    <div class="swiper-slide">Slide 8</div>--}}
{{--                    <div class="swiper-slide">Slide 9</div>--}}
{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        {{--                        <h5 class="card-title">Card title</h5>--}}
                        {{--                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        {{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--                        <a href="#" class="card-link">Card link</a>--}}
                        {{--                        <a href="#" class="card-link">Another link</a>--}}
                        <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="oi4kW6_j" data-limit="5"></script>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
