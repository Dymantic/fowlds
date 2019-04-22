<section class="py-20">
    <p class="h1 text-center">Journal.</p>
    <p class="max-w-lg mx-auto my-12 text-center">Here are some of my favorite posts about life in the bush.</p>
    <div class="max-w-lg mx-auto my-12">
        @foreach($posts->where('published', true)->take(5) as $post)
        <div class="flex justfiy-between my-4">
            <a href="{{ $post->getPath() }}">
                <img src="/assets/images/post-title/{{ $post->title_image }}" alt="{{ $post->title }}" class="h-32"></a>
            <div class="flex-1 relative p-4 bg-ivory">
                <p class="h3">{{ $post->title }}</p>
                <div class="h-1 w-48 bg-orange"></div>
                <a href="{{ $post->getPath() }}" class="no-underline text-orange btn-type-2 absolute pin-r pin-b mb-4 mr-4">Continue Reading</a>
            </div>
        </div>
        @endforeach
    </div>
</section>