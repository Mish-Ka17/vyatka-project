@extends('layouts.app')

@section('title', 'Блог')

@section('content')

@php

$news = [
    [
        'title' => 'Название новости 1',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
    [
        'title' => 'Название новости 6',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 2',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 3',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 4',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 5',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 3',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 4',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
        [
        'title' => 'Название новости 5',
        'description' => 'Место под короткое описание. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник',
        'image' => null,
        'url' => '/blog/article',
    ],
]
@endphp
<div class="container-page mt-1 py-8 lg:py-14">

    {{-- Хлебные крошки --}}
    <x-ui.breadcrumbs
        :items="[
            ['title' => 'Главная', 'url' => '/'],
            ['title' => 'Блог'],
        ]"
    />

    {{-- Заголовок --}}
    <x-ui.section-header title="Блог"/>

    {{-- Новости --}}
    <div
        class="
            grid
            gap-8
            md:grid-cols-2
            xl:grid-cols-3
        "
    >

        @foreach($news as $article)

            <x-news.card
                :title="$article['title']"
                :description="$article['description']"
                :image="$article['image']"
                :url="$article['url']"
            />

        @endforeach

    </div>

    {{-- Пагинация --}}
    <div class="mt-12">

        <x-ui.pagination :current="1" :last="5"
/>

    </div>

</div>

@endsection
