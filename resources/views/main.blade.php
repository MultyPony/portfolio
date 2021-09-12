@extends('layout')

@section('content')
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
@endsection
