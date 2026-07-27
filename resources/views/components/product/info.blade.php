<div class="rounded-3xl
        bg-white
        p-8
        shadow-sm">

    <div class="flex items-center gap-3 text-sm">

        <span>
            Арт: 4654GR
        </span>

        <span class="text-lime-600">
            В наличии
        </span>

    </div>

    <!-- <h1
        class="
            mt-3
            text-5xl
            font-black
        "
    >

        Название товара

    </h1> -->
    <x-ui.section-header title="Название товара"/>

    <p class="mt-5
            text-zinc-500
            leading-7">
        Краткое описание товара...
    </p>

    <div class="mt-8 space-y-3">

        @foreach(range(1,4) as $i)

            <div class="grid
                    grid-cols-2
                    border-b
                    pb-2">

                <span class="text-zinc-400">
                    Характеристика
                </span>

                <span class="font-medium">
                    Значение
                </span>

            </div>

        @endforeach

    </div>



    <x-ui.select/>


    <x-product.price
            :price="1000"
            :old-price="1600"
    />

    <div class="
            mt-6
            flex
            gap-3">

        <x-product.counter />

        <x-ui.button class="flex-1">

            В корзину🛒

        </x-ui.button>

    </div>

    <x-ui.button
        variant="secondary"
        class="mt-4 w-full">

        Купить в 1 клик

    </x-ui.button>
</div>
