<!-- <section class="py-24">

    <div class="container-page">

        <x-ui.section-header
            title="Каталог" />

        <div
            class="
                grid
                gap-6
                lg:grid-cols-2
            "
        >

            ...

        </div>

    </div>

</section> -->


<section class="py-8">

    <div class="container-page">

            <x-ui.section-header title="Каталог"/>

        <div
            class="mt-3
                grid
                gap-4
                md:grid-cols-2"
        >

            <!-- <a href="/category"> -->
                <x-category.card
                    title="Название"
                    description="Описание категории 1"
                    image="/images/category.jpg"
                />
            <!-- </a> -->

            <x-category.card
                title="Название"
                description="Описание категории 2"
                image="/images/category.jpg"
            />


            <x-category.card
                title="Название"
                description="Описание категории 3"
                image="/images/category.jpg"
            />

            <x-category.card
                title="Название"
                description="Описание категории 4"
                image="/images/category.jpg"
            />

        </div>

    </div>

</section>
