@extends('layouts.app')

@section('title','Категория')

@section('content')

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

            <div class="grid
                    gap-6
                    lg:grid-cols-3"
            >

            @foreach($products as $product)

                <x-product.card
                    title="{{$product->title}}"
                    price="{{$product->price}}"
                    oldPrice="{{$product->oldPrice}}"
                    image="{{$product->image}}"
                    url="{{$product->url}}"
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
