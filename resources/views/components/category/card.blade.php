@props([
    'title',
    'description',
    'image'
])

<article
    class="
        overflow-hidden
        rounded-2xl
        bg-zinc-100
    "
>

    <div class="grid grid-cols-2 min-h-[220px]">

        <div
            class="
                flex
                flex-col
                justify-between
                p-4
            "
        >

            <div>

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
                        text-zinc-500
                    "
                >

                    {{ $description }}

                </p>

            </div>


            <a
                href="/category"
                class="
                    mt-6
                    inline-flex
                    items-center
                    gap-2
                    text-sm
                    font-medium
                    text-blue-600
                "
            >

                Перейти

                <span>
                    →
                </span>

            </a>


        </div>


        <div
            class="
                bg-zinc-200
            "
        >

            @if($image)

                <img src="{{ $image }}"
                    alt="{{ $title }}"
                    class="h-full
                        w-full
                        object-cover"
                >

            @endif


        </div>


    </div>

</article>
