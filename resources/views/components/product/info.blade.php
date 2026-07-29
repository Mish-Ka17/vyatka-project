<div class="rounded-3xl
        bg-white
        p-8
        shadow-sm">

    <div class="flex items-center gap-3 text-sm">
        <span>
            Арт: 4654GR
        </span>
        <div class="flex items-center justify-center h-10">
            <div class="w-1 h-1 bg-black rounded-full"></div>
        </div>
        <span class="text-lime-600">
            В наличии
        </span>

    </div>

    <h2 class="mt-3
            text-3xl
            font-bold"
    >
        Название товара
    </h2>

    <p class="mt-5
            text-zinc-500
            leading-6">
        Резонатор, даже при наличии сильных аттракторов,
        представляет собой тангенциальный гамма-квант.
         Если предварительно подвергнуть объекты длительному...
    </p>

    <div class="mt-8 space-y-3">

        @foreach(range(1,4) as $i)

            <div class="grid
                    grid-cols-2
                    border-b border-zinc-300
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

    <div class="mt-6
            flex
            gap-3">

        <x-product.counter />

        <x-ui.button class="flex-1">

            В корзину

        </x-ui.button>

    </div>

    <x-ui.button
        variant="secondary"
        class="mt-4 w-full">

        Купить в 1 клик

    </x-ui.button>
</div>
