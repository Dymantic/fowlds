@extends('_layouts.master')

@section('title')
    My Work | Grant Fowlds
@endsection

@section('head')
    @include('_layouts.partials.ogmeta', [
        'ogTitle' => 'My Work | Grant Fowlds',
        'odDescription' => 'My work to conserve our wildlife involves conservation, consulation, public speaking and spreading awareness through various projects. Read about it here.'
    ])
@endsection

@section('body')
<section class="pt-28 px-8">
    <h1 class="h1 text-center mb-12 fadeUpAfterLoad">My Work.</h1>
    <p class="max-w-md mx-auto text-center">My work can be divided into three categories: conservation, consulting and speaking. If you're interested in working on a project together please feel free to get in touch.</p>
</section>
<div class="max-w-lg mx-auto px-8 my-20">
    <h3 class="h2 mb-8">Conservation.</h3>
    <p>Unbeknown to me, the real conservationist was born when I was a young boy growing up on the farm
that gave birth to Amakhala game reserve. A combination of declining agricultural margins forced my
hand into this sector through a tourism opportunity with a motto we adopted called ‘back to nature’.
Wildlife management started two decades ago and during this time the focus has been on sustainable
tourism – it has to pay to stay.</p>
</div>
<div class="max-w-lg mx-auto px-8 my-20">
    <h3 class="h2 mb-8">Consulting.</h3>
    <p>My love and passion for the wild and responsible tourism has resulted in an opportunity to consult in
tourism. This coupled with game introduction, reserve environmental planning has seen my career
take me to parts of west, southern and central africa. I have been a consultant in marketing
responsible tourism and an avid supporter of a green and sustainable model.</p>
</div>
<div class="max-w-lg mx-auto px-8 my-20">
    <h3 class="h2 mb-8">Speaking.</h3>
    <p class="">My love and passion for the wild and responsible tourism has resulted in an opportunity to consult in
tourism. This coupled with game introduction, reserve environmental planning has seen my career
take me to parts of west, southern and central africa. I have been a consultant in marketing
responsible tourism and an avid supporter of a green and sustainable model.</p>
    <div class="my-4">
        <strong>Podcasts I have been interviewed on by fantastic people, very much worth a listen!
        </strong>

        <div>
            <p class="my-2"><a class="text-orange no-underline hover:underline" target="_blank" href="https://podcasts.apple.com/tw/podcast/the-buck-that-buries-its-poo-by-quinton-coetzee/id1592300628?i=1000623639581&l=en-GB">The Buck that Buries its Poo with Quinton Coetzee</a>
            </p>

            <p class="my-2"><a class="text-orange no-underline hover:underline" href="https://podcasts.apple.com/tw/podcast/grant-fowlds-on-rhinos-rewilding-africa-and-the/id1589928171?i=1000575798387&l=en-GB" target="_blank">Grant Fowlds on Rhinos, Rewinding Africa, and the Front Lines of the Poaching Wars
                </a></p>

            <p class="my-2"><a class="text-orange no-underline hover:underline" href="https://soundcloud.com/rhino-man-podcast/ep-21-grant-fowlds-project-rhino-saving-the-last-rhinos-and-rewilding-africa?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing">Grant Fowlds - Project Rhino, Saving the Last Rhinos, and Rewilding Africa</a> with
                <a class="text-orange no-underline hover:underline" href="https://on.soundcloud.com/Adsm9" target="_blank">The Rhino Man Podcast</a>
            </p>

            <p class="my-2"><a class="text-orange no-underline hover:underline" href="https://podcasts.apple.com/tw/podcast/grant-fowlds-on-saving-the-last-rhinos-and/id1519366217?i=1000500785038&l=en-GB" target="_blank">Grant Fowlds on Saving the Last Rhinos, and the Wilderness of Zululand with Terra Stories: News from the Field Podcast
                </a></p>
        </div>
    </div>
<p class="my-4 font-bold">I have given presentations in locations far and wide, both in South Africa and abroad, including:</p>
<ul class="list-reset column-2 text-base">
    <li>University of Hanoi, Vietnam</li>
    <li>Biodiversity Agency, Hanoi, Vietnam</li>
    <li>Universidad Belgrano, Beunos Aires</li>
    <li>Top Service, Brazil</li>
    <li>Kangaroo, Brazil</li>
    <li>SAACI- South African Conference Industry</li>
    <li>Kashmir World Foundation, Washington DC</li>
    <li>University of Richmond, USA</li>
    <li>Rotary New South Wales, Australia</li>
    <li>Rotary Christchurch, New Zealand</li>
    <li>Cavalry and Guards, Piccadilly London</li>
    <li>Eton College, Windsor</li>
    <li>Sky News, United Kingdom</li>

    <li>Harvard University, Boston Mashachutes</li>
    <li>Madiba’s Brooklyn, New York</li>
    <li>WTM Africa 2015</li>
    <li>WTM Africa Thebe Reed Exhibition 2016</li>
    <li>Universidad San Sebastian de Chile</li>
    <li>Press Conference at Beatrice Hotel Kinshasa, DRC</li>
    <li>Bill Buchanan Home, Durban</li>
    <li>University of DUT, Durban</li>
</ul>
</div>
<div class="max-w-xl mx-auto mb-20">
    <div class="flex mb-4" style="">
        <div class="w-3/5 mr-2">
            <img class="object-fit h-full w-full" width="688px" height="450px" src="/assets/images/my-work/gorilla.jpg" alt="meeting the gorillas in DRC">
        </div>
        <div class="w-2/5 ml-2">
            <img class="object-fit h-full w-full" width="450px" height="450px" src="/assets/images/my-work/speaking.jpg" alt="Grant speaking to the public">
        </div>    
    </div>
    <div class="mb-3">
        <img class="w-full" src="/assets/images/my-work/shoes.jpg" alt="Grant delivering shoes to those who need">
    </div>
    <div class="flex mb-4" style="">
        <div class="w-2/5 mr-2">
            <img class="object-fit h-full w-full" width="688px" height="450px" src="/assets/images/my-work/dehorning.jpg" alt="removing a horn from a rhino">
        </div>
        <div class="w-3/5 ml-2">
            <img class="object-fit h-full w-full" width="450px" height="450px" src="/assets/images/my-work/conservation.jpg" alt="Grant in his Bura rhino T-shirt">
        </div>    
    </div>
    <div class="flex mb-4" style="">
        <div class="w-3/5 mr-2">
            <img class="object-fit h-full w-full" width="688px" height="450px" src="/assets/images/my-work/musical.jpg" alt="at a Rhino Art road show">
        </div>
        <div class="w-2/5 ml-2">
            <img class="object-fit h-full w-full" width="450px" height="450px" src="/assets/images/my-work/biking.jpg" alt="a group of cyclists">
        </div>    
    </div>
    <div>
        <img class="w-full" src="/assets/images/my-work/consultant.jpg" alt="working with a gentle giant white rhino">
    </div>
</div>
@endsection
