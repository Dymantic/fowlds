<section class="py-20">
    <p class="h1 text-center">Out & About.</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" height="30px" class="block mx-auto fill-current  mt-4 mb-12"><path fill-rule="evenodd" id="Instagram" class="cls-1" d="M22.14,2.14a5.72,5.72,0,0,1,5.72,5.72V22.14a5.72,5.72,0,0,1-5.72,5.72H7.86a5.72,5.72,0,0,1-5.72-5.72V7.86A5.72,5.72,0,0,1,7.86,2.14H22.14m0-2.14H7.86A7.86,7.86,0,0,0,0,7.86V22.14A7.86,7.86,0,0,0,7.86,30H22.14A7.86,7.86,0,0,0,30,22.14V7.86A7.86,7.86,0,0,0,22.14,0ZM15,8.57A6.43,6.43,0,1,1,8.57,15,6.43,6.43,0,0,1,15,8.57h0m0-2.14A8.57,8.57,0,1,0,23.57,15,8.57,8.57,0,0,0,15,6.43Zm9.64-.36a1.43,1.43,0,1,1-1.43-1.43A1.43,1.43,0,0,1,24.64,6.07Z"/></svg>
    <div class="">
        @foreach($page->instagrams->take(8)->chunk(4) as $row)
            <div class="flex flex-wrap md:flex-no-wrap justify-center">
            @foreach($row as $instagram)
                <img class="h-32 md:h-48 m-2" src="{{ $instagram }}" alt="">
            @endforeach
            </div>
            
        @endforeach
    </div>
</section>