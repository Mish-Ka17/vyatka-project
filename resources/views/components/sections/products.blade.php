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
                    title="{{$product->title}}"
                    price="{{$product->price}}"
                    oldPrice="{{$product->oldPrice}}"
                    image="{{$product->image}}"
                    url="{{$product->url}}"
                />

            @endforeach


        </div>

    </div>
</section>
