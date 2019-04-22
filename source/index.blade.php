@extends('_layouts.master', ['bodyClasses' => 'home'])

@section('body')
@include('_layouts.home.banner')
@include('_layouts.home.quote')
@include('_layouts.home.introduction')
@include('_layouts.home.book')
<div class="w-screen flex overflow-x-auto">
    @foreach($page->instagrams as $instagram)
        <img class="h-64" src="{{ $instagram }}" alt="">
    @endforeach
</div>
@include('_layouts.home.donate')
@include('_layouts.home.blog')
@endsection
