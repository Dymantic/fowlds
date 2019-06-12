@extends('_layouts.master')

@section('title')
    Contact Me | Grant Fowlds
@endsection

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => 'Contact Me | Grant Fowlds',
        'odDescription' => 'I would love to work with you! Please feel free to get in touch with me. Bookings should be made well in advance.'
    ])
@endsection

@section('body')
<section class="py-28">
    <h1 class="h1 text-center mb-12 fadeUpAfterLoad">Contact Me.</h1>
    <p class="max-w-md mx-auto text-center">Let's share stories. Get in touch for any collaborative projects, or just a chat.</p>
    <div class="max-w-lg mx-auto text-center mt-12 mb-0">
        <p class="mb-4">Cell: +27 83 264 1978</p>
        <p class="mb-4">Office: +27 42 235 1252</p>
        <p class=""><a class="text-black no-underline hover:text-orange" href="mailto:grant@amakhala.co.za">grant@amakhala.co.za</a></p>
    </div>
    <div class="pt-28">
        <p class="h1 text-center mb-12 fadeUpAfterLoad">Social.</p>
        <p class="max-w-md mx-auto text-center">Follow my adventures on social media.</p>
        <div class="flex justify-center items-center my-4">
            <a href="https://twitter.com/GrantFowlds1" class="no-underline hover:text-teal text-orange mx-4">
                @include('_layouts.svgs.social.twitter')
            </a>
            <a href="https://www.linkedin.com/in/grant-fowlds-01671233/detail/recent-activity/posts/" class="no-underline hover:text-teal text-orange mx-4">
                @include('_layouts.svgs.social.linkedin')
            </a>
            <a href="https://www.facebook.com/grant.fowlds" class="no-underline hover:text-teal text-orange mx-4">
                @include('_layouts.svgs.social.facebook')
            </a>
            <a href="https://www.instagram.com/grantfowlds/" class="no-underline hover:text-teal text-orange mx-4">
                @include('_layouts.svgs.social.instagram')
            </a>
            <a href="https://www.youtube.com/channel/UCWD9yfXwYd7i_newBU8B0uA" class="no-underline hover:text-teal text-orange mx-4">
                @include('_layouts.svgs.social.youtube')
            </a>
        </div>
    </div>
</section>
@endsection
