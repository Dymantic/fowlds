<section class="py-20 px-8">
    <p class="h1 text-center">Journal.</p>
    <p class="max-w-lg mx-auto my-12 text-center">Here are some of my favorite posts about life in the bush.</p>
    <div class="max-w-lg mx-auto my-12">
        @foreach($posts->where('published', true)->take(5) as $post)
        <div class="flex justfiy-between my-4 h-32 md:h-auto">
            <a href="{{ $post->getPath() }}" class="hidden md:inline">
                <img src="/assets/images/post-title/{{ $post->title_image }}" alt="{{ $post->title }}" class="h-20"></a>
            <div class="flex-1 relative p-4 bg-ivory">
                <p class="h3"><a href="{{ $post->getPath() }}" class="no-underline text-black hover:text-grey">{{ $post->title }}</a></p>
                <div class="h-1 w-32 bg-orange mt-1"></div>
                <a href="{{ $post->getPath() }}" class="no-underline text-orange hover:text-teal btn-type-2 absolute pin-r pin-b mb-4 mr-4">Continue Reading</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex flex-col items-center">
        <a class="text-orange hover:text-teal no-underline btn-type-1 mb-4" href="/journal">Go to Journal</a>
    </div>
</section>