@props([
    'title',
    'price',
    'oldPrice',
    'image',
    'url' => '#',
])

<article class="max-w-[318px] max-h-[411px] items-center rounded-2xl border border-zinc-200 bg-white p-2
        transition hover:shadow-lg">
<a href="{{ $url }}"
    class="
        group
        block
        overflow-hidden
        rounded-3xl
        bg-zinc-100
        transition
        hover:-translate-y-1
        hover:shadow-lg">

    <div class="mt-2 p-2 h-[215px] w-[286px] rounded-xl bg-zinc-100">
        <x-product.badge/>
        {{-- image --}}
    </div>
</a>
    <div class="mt-4">

        <p class="text-sm text-lime-600">
            В наличии
        </p>

        <h3 class="mt-1 font-medium">
            {{$title}}
            {{-- $product->name --}}
        </h3>

        <div class="mt-2 flex items-center gap-2">
            <span class="text-2xl font-bold">

                {{ number_format($price,0,'',' ') }} ₽

            </span>

            @if($oldPrice)
                <span
                    class="text-zinc-400 line-through">

                    {{ number_format($oldPrice,0,'',' ') }} ₽

                </span>
            @endif

        </div>

        <!-- <x-product.price :price=2000 :oldPrice=3000 /> -->

    </div>


    <div class="mt-4 flex items-center justify-between gap-3">

        <x-product.counter/>

        <x-ui.button>

            В корзину

        </x-ui.button>

    </div>
</article>
