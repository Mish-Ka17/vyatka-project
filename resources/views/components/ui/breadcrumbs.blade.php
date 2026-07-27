@props([
    'items' => [],
])

<nav class="mb-6 text-sm text-zinc-400">

    <ol class="flex items-center gap-2">

        @foreach($items as $item)

            <li class="flex items-center gap-2">

                @if(!$loop->last)

                    <a
                        href="{{ $item['url'] }}"
                        class="hover:text-zinc-700"
                    >
                        {{ $item['title'] }}
                    </a>

                    <span>•</span>

                @else

                    <span class="text-zinc-900">

                        {{ $item['title'] }}

                    </span>

                @endif

            </li>

        @endforeach

    </ol>

</nav>
