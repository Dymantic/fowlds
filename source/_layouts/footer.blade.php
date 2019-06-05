<footer class="bg-black py-12 px-8">
<div class="max-w-2xl mx-auto">
    <div>
        <p class="h2 text-orange text-center mb-8">Follow Me</p>
        <div class="flex justify-center items-center">
        <a href="https://twitter.com/GrantFowlds1" class="no-underline text-white hover:text-orange mx-4">
            @include('_layouts.svgs.social.twitter')
        </a>
        <a href="https://www.linkedin.com/in/grant-fowlds-01671233/detail/recent-activity/posts/" class="no-underline text-white hover:text-orange mx-4">
            @include('_layouts.svgs.social.linkedin')
        </a>
        <a href="https://www.facebook.com/grant.fowlds" class="no-underline text-white hover:text-orange mx-4">
            @include('_layouts.svgs.social.facebook')
        </a>
        <a href="https://www.instagram.com/grantfowlds/" class="no-underline text-white hover:text-orange mx-4">
            @include('_layouts.svgs.social.instagram')
        </a>
        <a href="https://www.youtube.com/channel/UCWD9yfXwYd7i_newBU8B0uA" class="no-underline text-white hover:text-orange mx-4">
            @include('_layouts.svgs.social.youtube')
        </a>
            
        </div>
    </div>
    <div class="my-20">
        {{-- <p class="h2 text-orange">Quick Links</p> --}}
        <div class="flex flex-row justify-center items-center">
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/">Home</a>
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/book">Book</a>
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/work">Work</a>
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/associates">Associates</a>
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/journal">Journal</a>
            <a class="mx-8 text-grey-light hover:text-orange no-underline" href="/contact">Contact</a>
        </div>
    </div>
    <p class="text-white mt-8 text-center">&copy; {{ date('Y') }} Beautifully built by <a href="https://dymanticdesign.com" target="_blank" class="no-underline text-white hover:text-teal">Dymantic Design</a></p>
</div>
</footer>