@extends('_layouts.master', ['bodyClasses' => 'home'])

@section('body')
@include('_layouts.home.banner')
@include('_layouts.home.quote')
@include('_layouts.home.introduction')
@include('_layouts.home.book')
@include('_layouts.home.instagram')
@include('_layouts.home.donate')
@include('_layouts.home.blog')
@endsection
