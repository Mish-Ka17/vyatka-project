@extends('layouts.app')

@section('title', 'Блог')

@section('content')

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
                title="{{$article->title}}"
                description="{{$article->description}}"
                image="{{$article->image}}"
                url="{{$article->url}}"
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
