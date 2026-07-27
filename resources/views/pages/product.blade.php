@extends('layouts.app')

@section('title', 'Название товара')

@section('content')

@php
$products = [
    [
        'title' => 'Название товара 1',
        'price' => 1000,
        'oldPrice' => 1500,
        'image' => null,
    ],
    [
        'title' => 'Название товара 2',
        'price' => 1500,
        'oldPrice' => 1700,
        'image' => null,
    ],
    [
        'title' => 'Название товара 3',
        'price' => 1800,
        'oldPrice' => 2000,
        'image' => null,
    ],
    [
        'title' => 'Название товара 4',
        'price' => 2800,
        'oldPrice' => 3500,
        'image' => null,
    ],
]
@endphp

<div class="container-page py-10">

    <x-ui.breadcrumbs
        :items="[
            ['title'=>'Главная','url'=>'/'],
            ['title'=>'Каталог','url'=>'/catalog'],
            ['title'=>'Категория','url'=>'/category'],
            ['title'=>'Название товара']
        ]"
    />

    <div class="grid gap-8 lg:grid-cols-[1fr_420px]">

        <x-product.gallery />

        <x-product.info />

    </div>

    <div class="mt-16">

        <x-product.tabs />

    </div>

    <div>
        <section class="mt-24">

            <x-ui.section-header
                title="Похожие товары"
                arrows
            />

            <div class="grid gap-6 lg:grid-cols-4">

                @foreach($products as $product)

                    <x-product.card
                        :title="$product['title']"
                        :price="$product['price']"
                        :old-price="$product['oldPrice']"
                        :image="$product['image']"

                    />

                @endforeach

            </div>

        </section>
    </div>

</div>

@endsection
