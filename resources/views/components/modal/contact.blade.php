<div
    id="contact-modal"
    class="
        fixed inset-0 z-50
        hidden
        items-center
        justify-center
        bg-black/40
        p-6
    "
>
    <div
    class="
        relative
        w-full
        max-w-[496px]
        max-h-[90vh]
        rounded-[32px]
        bg-white
        px-8
        pt-10
        pb-8
        shadow-2xl
    "
>

        {{-- Закрыть --}}

<button
    id="modal-close"
    class="
        absolute
        top-5
        right-5
        flex
        h-10
        w-10
        items-center
        justify-center
        rounded-2xl
        border
        border-zinc-200
        transition
        hover:bg-zinc-100
    "
>
    <svg
        class="h-6 w-6"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 6L18 18M18 6L6 18"
        />
    </svg>
</button>

<h2
    class="
        text-center
        text-[36px]
        font-bold
        leading-none
    "
>
    Оставьте заявку
</h2>

<p
    class="
        mt-3
        text-center
        text-xl
        text-zinc-700
    "
>
    Мы свяжемся с Вами в ближайшее время
</p>

        <form
            class="mt-8 space-y-4"
        >

            <x-ui.input
                placeholder="Ваше имя"
            />

            <x-ui.input
                type="tel"
                placeholder="Телефон"
            />

            <x-ui.textarea
                rows="5"
                placeholder="Сообщение"
            />

            <label class="flex items-start gap-3 text-sm text-zinc-500">

                <input
                    type="checkbox"
                    class="mt-1 h-5 w-5 rounded border-zinc-300"
                >

                <span>

                    Даю согласие на

                    <a
                        href="#"
                        class="underline"
                    >
                        обработку персональных данных
                    </a>

                </span>

            </label>


            <x-ui.button class="h-16 w-full justify-center text-lg">
                Отправить
            </x-ui.button>

        </form>

    </div>
</div>
