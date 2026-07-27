<select
    {{ $attributes->merge([
        'class' => '
            mt-8
            h-14
            w-full
            rounded-xl
            border
            border-zinc-200
            px-5
        '
    ]) }}
>
    {{ $slot }}
</select>
