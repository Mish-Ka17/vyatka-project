<section>

<div class="container-page mt-4">
    <x-ui.section-header
            title="Новости"
            arrows
        />
    <div class="
                mt-3
                grid
                gap-6
                md:grid-cols-3"
        >

        @foreach($news as $article)

            <x-news.card
                title="{{$article->title}}"
                description="{{$article->description}}"
                image="{{$article->image}}"
                url="{{$article->url}}"
                />

        @endforeach
    </div>
    <div>
    <a href="#"
        class="
        mt-6
        flex
        h-14
        items-center
        justify-center
        rounded-xl
        bg-zinc-100
        text-sm
        font-medium">

        Все новости

    </a>

    </div>

</section>
