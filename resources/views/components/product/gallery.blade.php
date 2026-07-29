<div x-data="gallery()"
    class="relative overflow-hidden rounded-3xl bg-zinc-100"
>
    <div class="w-[774px] h-[580px]">
        <!-- aspect-4/3 -->
        {{-- изображение --}}

    </div>

    <div class="absolute left-6 top-6 flex gap-2">

        <x-product.badge>NEW</x-product.badge>

        <x-product.badge>NEW</x-product.badge>

        <x-product.badge>NEW</x-product.badge>

    </div>

    <button
        class="absolute left-6 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow"
    >
        ←
    </button>

    <button
        class="absolute right-6 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow"
    >
        →
    </button>

    <button
        class="absolute right-6 top-6 flex h-12 w-12 items-center justify-center rounded-full bg-white shadow"
    >
        ♡
    </button>

</div>
