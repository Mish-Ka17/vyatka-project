@props([
    'title',
    'description',
    'image' => null,
    'url' => '#',
])

<a href="{{ $url }}"
    class="
        group
        block
        overflow-hidden
        rounded-3xl
        bg-zinc-100
        transition
        hover:-translate-y-1
        hover:shadow-lg
    "
>

    {{-- Изображение --}}
    <div class="relative aspect-[4/3] bg-zinc-200">

        @if($image)

            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
            >

        @endif

        {{-- Затемнение --}}
        <div
            class="
                absolute
                inset-0
                bg-gradient-to-t
                from-black
                via-black/30
                to-transparent
            "
        ></div>

        {{-- Текст --}}
        <div
            class="
                absolute
                bottom-0
                left-0
                right-0
                p-6
                text-white
            "
        >

            <h3
                class="
                    text-2xl
                    font-bold
                "
            >
                {{ $title }}
            </h3>

            <p
                class="
                    mt-3
                    text-sm
                    leading-6
                    text-zinc-200
                "
            >
                {{ $description }}
            </p>

        </div>

    </div>

</a>



<!--
<article
    class="
        relative
        aspect-[4/3]
        width-[432px] height-[408px]
        overflow-hidden
        rounded-2xl
        bg-zinc-200
    "
>


@if($image)

<img
    src="{{ $image }}"
    alt="{{ $title}}"
    class="
        absolute
        inset-0
        h-full
        w-full
        object-cover
    "
>

@endif



<div
    class="
        absolute
        inset-x-0
        bottom-0
        p-6
        text-white
        bg-gradient-to-t
        from-black/80
        via-black/30
        to-transparent
    "
>


<h3
    class="
        text-xl
        font-semibold
    "
>

{{ $title }}

</h3>


<p
    class="
        mt-2
        text-sm
        text-zinc-200
    "
>

{{ $description }}

</p>


</div>


</article> -->
