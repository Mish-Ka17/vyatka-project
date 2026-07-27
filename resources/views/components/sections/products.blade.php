<!-- <section class="py-24">

    <div class="container-page">

        <x-ui.section-header
            title="Товары"
            arrows
        />

        <div class="grid gap-6 lg:grid-cols-4">

            ...

        </div>

    </div>

</section> -->

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
];

@endphp

<section>
    <div class="container-page mt-8">
         <x-ui.section-header
            title="Товары"
            arrows
        />
        <!-- <div class="mt-3 grid grid-cols-4 gap-8"> -->
        <div class="grid gap-6 lg:grid-cols-4">

            @foreach ($products as $product)

                <x-product.card
                    :title="$product['title']"
                    :price="$product['price']"
                    :oldPrice="$product['oldPrice']"
                    :image="$product['image']"
                    :url="$product['url']"
                />

            @endforeach


        </div>

    </div>
</section>
