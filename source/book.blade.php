@extends('_layouts.master')

@section('title')
    My Book, Saving the Last Rhinos | Grant Fowlds
@endsection

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => 'Saving the Last Rhinos | Grant Fowlds',
        'odDescription' => 'Take a ride through my life and adventures trying to save our wildlife.'
    ])
@endsection

@section('body')
<section class="py-28 px-8">
    <h1 class="h1 text-center max-w-md mx-auto mb-12 fadeUpAfterLoad">Saving the Last Rhinos - The Life of a Frontline Conservationist</h1>
    <p class="h2 text-center">by</p>
    <p class="h2 text-center">Grant Fowlds and Graham Spence</p>
    <p class="my-12 max-w-md mx-auto">Conservationist, educator, fundraiser, community activist, and much more, Grant strives relentlessly to save endangered species. Each day of his life involves a new challenge, a setback or victory of some sort. Most important to him is that he tries to makes a difference - to communities and to the wildlife he is so passionate about.</p>
    <img src="/assets/images/book_poster.png" alt="Book poster for Saving the Last Rhinos by Grant Fowlds and Graham Spence" class="block my-20 mx-auto max-w-full">

    <p class="my-12 max-w-md mx-auto">This is Grant’s first book, co-written with Graham Spence the bestselling author of The Elephant Whisperer, Babylons Ark, and The last Rhinos.</p>
    <p class="h1 mt-20 mb-12 text-center">Available Now</p>
    <p class="max-w-md mx-auto text-center">Look for this book in all reputable book shops and online book sellers.</p>
</section>
@endsection
