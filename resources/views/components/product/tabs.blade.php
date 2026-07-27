<div class="mt-20">

    {{-- Навигация --}}
    <div
        class="
            flex
            items-center
            gap-8
            border-b
            border-zinc-200
        "
    >

        <button
            class="
                relative
                pb-4
                text-sm
                font-semibold
                uppercase
                tracking-wide
                text-black
                after:absolute
                after:bottom-[-1px]
                after:left-0
                after:h-[2px]
                after:w-full
                after:bg-black
            "
        >
            Описание
        </button>

        <button
            class="
                pb-4
                text-sm
                font-semibold
                uppercase
                tracking-wide
                text-zinc-400
                transition
                hover:text-black
            "
        >
            Характеристики
        </button>

        <button
            class="
                pb-4
                text-sm
                font-semibold
                uppercase
                tracking-wide
                text-zinc-400
                transition
                hover:text-black
            "
        >
            Документы
        </button>

        <button
            class="
                pb-4
                text-sm
                font-semibold
                uppercase
                tracking-wide
                text-zinc-400
                transition
                hover:text-black
            "
        >
            Оплата и доставка
        </button>

    </div>

    {{-- Контент --}}
    <div class="pt-10">

        <x-product.tab-description />

        {{--
            Позже вместо этого будут:

            <x-product.tab-characteristics />
            <x-product.tab-documents />
            <x-product.tab-delivery />

        --}}

    </div>

</div>
