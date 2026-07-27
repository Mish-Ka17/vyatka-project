@props([
'price',
'oldPrice',
])

<div class="mt-2 flex items-center gap-2">

    <span
        class="text-2xl font-bold">

        {{ number_format($price,0,'',' ') }} ₽

    </span>

    @if($oldPrice)

        <span
            class="text-zinc-400 line-through">

            {{ number_format($oldPrice,0,'',' ') }} ₽

        </span>

    @endif

</div>
