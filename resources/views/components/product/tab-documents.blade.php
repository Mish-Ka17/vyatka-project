<div class="space-y-4 max-w-3xl">

    @foreach(range(1,3) as $i)

        <a
            href="#"
            class="
                flex
                items-center
                justify-between
                rounded-xl
                border
                border-zinc-200
                p-5
                transition
                hover:bg-zinc-50
            "
        >

            <span>

                Паспорт изделия.pdf

            </span>

            <span class="text-sm text-zinc-400">

                PDF

            </span>

        </a>

    @endforeach

</div>
