@extends('_layouts.master')

@section('title')
    {{ $page->title }} | Grant Fowlds
@endsection

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => $page->title,
        'odDescription' => $page->description
    ])
@endsection

@section('body')
<div class="max-w-lg mx-auto pt-20 px-8">
    <p class="text-orange text-center mb-4">{{ date('jS F Y', $page->date) }}</p>
    <h1 class="h1 text-black text-center">{{ $page->title }}</h1>
    <p class="h3 text-black my-12 text-center">By {{ $page->author }}</p>
</div>
<div class="article-content max-w-lg mx-auto pb-20 px-8">
@yield('content')
</div>
<div class="pb-20">
    <p class="h3 text-black my-12 text-center">Share this article</p>
    <div class="flex justify-center items-center">
        <a class="mx-4" href="">
            @include('_layouts.svgs.social.facebook', ['classes' => 'h-6 text-orange hover:text-teal'])
        </a>
        <a class="mx-4" href="">
            @include('_layouts.svgs.social.twitter', ['classes' => 'h-6 text-orange hover:text-teal'])
        </a>
        <a class="mx-4" href="">
            @include('_layouts.svgs.social.mail', ['classes' => 'h-6 text-orange hover:text-teal'])
        </a>
    </div>    
    
</div>
@endsection('body')