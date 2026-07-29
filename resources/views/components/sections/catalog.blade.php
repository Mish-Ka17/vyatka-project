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
            @foreach ($categories as $category)
                <x-category.card
                    title="{{$category->title}}"
                    description="{{$category->description}}"
                    image="{{$category->image}}"/>

            @endforeach

        </div>

    </div>

</section>
