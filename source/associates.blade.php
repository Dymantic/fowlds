@extends('_layouts.master')

@section('title')
    Associates | Grant Fowlds
@endsection

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => 'Associates | Grant Fowlds',
        'odDescription' => 'Through my work I collaborate with a plethora of amazing individuals, NGOs, corporations, and small businesses trying to make a difference. These are my people, check them out.'
    ])
@endsection

@section('body')
<section class="py-28 px-8">
    <h1 class="h1 text-center mb-12 fadeUpAfterLoad">Associates.</h1>
    <p class="max-w-md mx-auto text-center">Through my work I collaborate with a plethora of amazing individuals, NGOs, corporations, and small businesses trying to make a difference. These are my people, check them out.</p>
</section>
<section class="px-4">
    @foreach($associates as $associate)
@include("_layouts.associate", $associate)
@endforeach
</section>

@endsection
