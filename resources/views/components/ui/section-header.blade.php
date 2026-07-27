@props([
    'title',
    'arrows' => false,
])

<div class="mb-3 flex items-center justify-between">

    <h2 class="text-[48px] font-bold leading-none tracking-tight">
        {{ $title }}
    </h2>

    @if($arrows)

        <x-ui.slider-arrows />

    @endif

</div>
