@extends('layouts.app')

@section('title','Категория')

@section('content')

@php

$products = [
    [
        'title' => 'Название товара 1',
        'price' => 1000,
        'oldPrice' => 1500,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 2',
        'price' => 1500,
        'oldPrice' => 1700,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 3',
        'price' => 1800,
        'oldPrice' => 2000,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 4',
        'price' => 2500,
        'oldPrice' => 3000,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 5',
        'price' => 1000,
        'oldPrice' => 1500,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 6',
        'price' => 1500,
        'oldPrice' => 1700,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 7',
        'price' => 1800,
        'oldPrice' => 2000,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 8',
        'price' => 2500,
        'oldPrice' => 3000,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 9',
        'price' => 1000,
        'oldPrice' => 1500,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 10',
        'price' => 1500,
        'oldPrice' => 1700,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 11',
        'price' => 1800,
        'oldPrice' => 2000,
        'image' => null,
        'url' => '/category/product',
    ],
    [
        'title' => 'Название товара 12',
        'price' => 2500,
        'oldPrice' => 3000,
        'image' => null,
        'url' => '/category/product',
    ]
];

@endphp

<div class="container-page py-12">

    <x-ui.breadcrumbs
        :items="[
            ['title'=>'Главная','url'=>'/'],
            ['title'=>'Каталог','url'=>'/catalog'],
            ['title'=>'Категория']
        ]"
    />

    <x-ui.section-header title="Категория"/>

    <div class="flex gap-12">

        <x-category.sidebar/>

        <div class="flex-1">

            <x-category.sort/>

            <div
                class="
                    grid
                    gap-6
                    lg:grid-cols-3
                "
            >

                @foreach($products as $product)

                    <x-product.card
                        :title="$product['title']"
                        :price="$product['price']"
                        :old-price="$product['oldPrice']"
                        :image="$product['image']"
                        :url="$product['url']"

                    />

                @endforeach

            </div>

            <div class="mt-12">

                <x-ui.pagination :current="2" :last="8"/>

            </div>

        </div>

    </div>

</div>

@endsection
