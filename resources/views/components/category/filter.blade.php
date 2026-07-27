@props([
'title',
'radio'=>false
])

<div>

    <h3 class="mb-4 font-semibold">

        {{ $title }}

    </h3>

    <div class="space-y-3">

    @foreach(range(1,8) as $i)

        <label class="flex items-center gap-3">

        <input
         type="{{ $radio ? 'radio':'checkbox' }}"
        >

        <span>

        Название фильтра&nbsp{{$i}}

        </span>

        </label>

    @endforeach

    </div>

    <a href="#" class="mt-4 inline-block text-sm text-blue-600">

    Показать все

    </a>

</div>
