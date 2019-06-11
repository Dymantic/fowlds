<div data-usher class="flex flex-col md:flex-row md:bg-ivory max-w-lg my-12 mx-auto md:shadow-lg">
    <div class="p-2 w-32 md:w-64 mx-auto mb-6">
        <img src="/assets/images/associates/{{ $associate->image }}" alt="{{ $associate->name }} logo" class="w-full block">
    </div>
    
    <div class="px-4 py-2 flex flex-col flex-1 justify-between">
        <div class="flex-1">
            <p class="h3 text-black">{{ $associate->name }}</p>
            <div class="h-1 w-48 bg-orange"></div>
            <p class="my-4 text-base">{{ $associate->description }}</p>
        </div>
        <div class="text-right">
        @if($associate->link)
            <a class="text-orange hover:text-teal no-underline mb-4 text-base" href="{{ $associate->link }}">Visit Website</a>
        @endif
        </div>
        
    </div>
</div>