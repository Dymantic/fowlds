@extends('_layouts.master')

@section('body')
<section class="py-28">
    <h1 class="h1 text-center mb-12 fadeUpAfterLoad">Journal.</h1>
    <p class="max-w-md mx-auto text-center">I'm a busy guy. These are my entries about where I've been, what I've been doing, who I've met, who is helping my cause, and why things matter.</p>
</section>
<div class="max-w-xl mx-auto px-8 grid-3">
@foreach($posts as $post)
    @include('_layouts.blog.index-card')
    
@endforeach
</div>

@endsection
