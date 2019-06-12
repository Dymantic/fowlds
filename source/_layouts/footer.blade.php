<footer class="bg-black py-12 px-8">
<div class="max-w-2xl mx-auto">
    <div>
        <p class="h2 text-orange text-center mb-8">Follow Me</p>
        <div class="flex justify-center items-center">
        <a href="https://twitter.com/GrantFowlds1" class="no-underline text-white hover:text-teal mx-4">
            @include('_layouts.svgs.social.twitter')
        </a>
        <a href="https://www.linkedin.com/in/grant-fowlds-01671233/detail/recent-activity/posts/" class="no-underline text-white hover:text-teal mx-4">
            @include('_layouts.svgs.social.linkedin')
        </a>
        <a href="https://www.facebook.com/grant.fowlds" class="no-underline text-white hover:text-teal mx-4">
            @include('_layouts.svgs.social.facebook')
        </a>
        <a href="https://www.instagram.com/grantfowlds/" class="no-underline text-white hover:text-teal mx-4">
            @include('_layouts.svgs.social.instagram')
        </a>
        <a href="https://www.youtube.com/channel/UCWD9yfXwYd7i_newBU8B0uA" class="no-underline text-white hover:text-teal mx-4">
            @include('_layouts.svgs.social.youtube')
        </a>
            
        </div>
    </div>
    <div class="flex justify-center mt-12">
        <a href="#" class="back-to-top text-grey-light hover:text-teal no-underline flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="30"><path class="fill-current" d="M8.7 14.7a1 1 0 0 1-1.4-1.4l4-4a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1-1.4 1.4L12 11.42l-3.3 3.3z"/></svg>
            <p>Top</p>
        </a>
    </div>
    <div class="mt-8 mb-20">
        {{-- <p class="h2 text-orange">Quick Links</p> --}}
        <div class="flex flex-col md:flex-row justify-center items-center">
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/">Home</a>
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/book">Book</a>
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/work">Work</a>
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/associates">Associates</a>
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/journal">Journal</a>
            <a class="mx-8 text-grey-light hover:text-teal no-underline" href="/contact">Contact</a>
        </div>
    </div>
    <p class="text-sm md:text-normal text-white mt-8 text-center">&copy; {{ date('Y') }} Beautifully built by <a href="https://dymanticdesign.com" target="_blank" class="no-underline text-white hover:text-teal">Dymantic Design</a></p>
</div>
</footer>