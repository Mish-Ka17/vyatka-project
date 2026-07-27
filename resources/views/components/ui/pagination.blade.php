@props([
    'current' => 1,
    'last' => 10,
])

@if($last > 1)

<nav
    class="flex items-center justify-center gap-2"
    aria-label="Pagination"
>

    {{-- Предыдущая --}}
    <button
        class="
            flex h-12 w-12 items-center justify-center
            rounded-xl border border-zinc-200
            text-zinc-400 transition
            hover:border-black hover:text-black
            disabled:pointer-events-none
            disabled:opacity-40
        "
        @disabled($current === 1)
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    {{-- Номера страниц --}}
    @for($page = 1; $page <= $last; $page++)

        <a
            href="#"
            @class([
                'flex h-12 w-12 items-center justify-center rounded-xl text-sm font-semibold transition',
                'bg-black text-white' => $page == $current,
                'border border-zinc-200 hover:border-black hover:text-black' => $page != $current,
            ])
        >
            {{ $page }}
        </a>

    @endfor

    {{-- Следующая --}}
    <button
        class="
            flex h-12 w-12 items-center justify-center
            rounded-xl border border-zinc-200
            text-zinc-400 transition
            hover:border-black hover:text-black
            disabled:pointer-events-none
            disabled:opacity-40
        "
        @disabled($current === $last)
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"/>
        </svg>
    </button>

</nav>

@endif
