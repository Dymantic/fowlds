@extends('_layouts.master', ['bodyClasses' => 'home'])

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => 'Grant Fowlds | Wildlife Conservationist',
        'odDescription' => 'Hi, I am Grant Fowlds, conservationist, speaker and consultant. I have a great passion for wildlife conservation and tourism, and extensive experience in spreading awareness and in wildlife restoration and conservation projects.'
    ])
@endsection

@section('body')
@include('_layouts.home.banner')
@include('_layouts.home.quote')
@include('_layouts.home.introduction')
@include('_layouts.home.book')
@include('_layouts.home.instagram')
@include('_layouts.home.donate')
@include('_layouts.home.blog')
@endsection
