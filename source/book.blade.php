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
    <h1 class="h1 text-center max-w-md mx-auto mb-12 fadeUpAfterLoad">Rewilding Africa - Restoring the Wilderness on a War-ravaged Continent</h1>
    <p class="h2 text-center">by</p>
    <p class="h2 text-center">Grant Fowlds and Graham Spence</p>
    <p class="mt-12 max-w-md mx-auto">Conservationist Grant Fowlds lives to save and protect Africa’s rhinos, elephants and other iconic wildlife, to preserve their habitats, to increase their range and bring back the animals where they have been decimated by decades of war, as in Angola, Mozambique and the Democratic Republic of the Congo.</p>
    <p class="mt-6 mb-12 max-w-md mx-auto">This vivid account of his work tells of a fellow conservationist tragically killed by the elephants he was seeking to save and a face-off with poachers, impoverished rural people exploited by rapacious local businessmen.</p>
    <img src="/assets/images/home/book_rewilding.jpg" alt="Book cover for Rewilding Africa by Grant Fowlds and Graham Spence" class="block my-20 mx-auto w-full max-w-lg">

    <p class="my-12 max-w-md mx-auto">This the second book by Grant and Graham Spence, who have once again made a great team in lucidly revealing the endeavours of Grant.</p>
    <p class="h1 mt-20 mb-12 text-center">Available Now</p>
    <p class="max-w-md mx-auto text-center">Look for this book in all reputable book shops and online book sellers.</p>
</section>
<div class="max-w-lg mx-auto border-b border-black"></div>
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
