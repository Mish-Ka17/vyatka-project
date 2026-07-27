<div class="max-w-3xl">

    <div class="divide-y divide-zinc-200">

        @foreach(range(1,10) as $i)

            <div
                class="
                    grid
                    grid-cols-2
                    py-4
                "
            >

                <span class="text-zinc-500">

                    Характеристика {{ $i }}

                </span>

                <span class="font-medium">

                    Значение

                </span>

            </div>

        @endforeach

    </div>

</div>
