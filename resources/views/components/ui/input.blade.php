@props([
    'type' => 'text',
])

<!-- <input
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => '
            w-full
            rounded-[28px]
            border
            border-zinc-300
            px-8
            py-6
            text-2xl
            placeholder:text-zinc-400
            focus:border-black
            focus:outline-none
        '
    ]) }}
> -->
<input
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => '
            h-16
            w-full
            rounded-2xl
            border
            border-zinc-300
            px-5
            text-lg
            placeholder:text-zinc-400
            focus:border-black
            focus:outline-none
        '
    ]) }}
>
