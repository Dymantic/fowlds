<div class="bg-ivory p-2 flex flex-col justify-between" data-usher>
    <div>
        <a href="{{ $post->getPath() }}">
            <img src="/assets/images/post-title/{{ $post->title_image }}" alt="{{ $post->title }}">
        </a>
        <p class="h3 my-4">{{ $post->title }}</p>
        <div class="w-24 h-1 bg-orange mb-4"></div>
        <p class="px-4 text-base">{{ $post->description }}</p>
    </div>
    <div class="text-right">
        <a class="text-base text-orange hover:text-teal no-underline" href="{{ $post->getPath() }}">Continue Reading</a>
    </div>
</div>    