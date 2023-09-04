<x-guest-layout>
    <section class="items-center max-w-screen-xl px-4 pb-12 mx-auto mt-24 lg:flex md:px-8">
        <div class="space-y-4 sm:text-center lg:text-left container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url(https://cdn.pixabay.com/photo/2015/02/13/23/57/ski-tour-635973_1280.jpg) ">
            <h1 class="text-4xl font-bold text-black xl:text-5xl">
                <span class=" text-indigo-600"> AdriaRent</span>
            </h1>
            <p class="max-w-xl text-gray-300 sm:mx-auto lg:ml-0">
                Dobrodošli na stranicu za rezerviranje zimske opreme.<br>
                Klikni ispod za rezervaciju!
            </p>
            <div class="items-center justify-center pt-10 space-y-3 sm:space-x-6 sm:space-y-0 sm:flex lg:justify-start">
                <a href="{{ route('reservations.index') }}"
                   class="block w-full py-3 text-center text-gray-800 bg-white rounded-md shadow-md px-7 sm:w-auto">
                    Rezerviraj
                </a>
                <a href="#contact"
                   class="scroll-smooth block w-full py-3 text-center text-gray-200 bg-gray-700 rounded-md px-7 sm:w-auto">
                    Kontaktiraj nas
                </a>
            </div>
        </div>
    </section>

    
    <!-- Section 8 -->
    <section class="bg-white" id="blogs">
        <div class="w-full px-8 py-10 mx-auto lg:max-w-7xl">
            <div class="mb-4 text-center">
                <h3 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500">Naša oprema</h3>
            </div>
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                @foreach($categories as $category)
                    <div class="relative p-2 border border-indigo-600 rounded-md">
                        
                        <a href="#" class="block overflow-hidden">
                            <img
                                src="{{ Storage::url($category->image) }}"
                                class="object-cover w-full h-56" alt="image">
                        </a>
                        <div class="relative mt-5 mb-1">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600"></p>
                            <a href="{{ route('categories.show', $category->id) }}" class="block mb-3">
                                <h2 class="text-2xl font-bold hover:text-gray-400">
                                    {{ $category->name  }}</h2>
                            </a>
                            <p class="mb-4 text-gray-700">{{$category->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            </div>
        </div>
    </section>


<!-- Section 5 -->
    <section class="relative text-gray-900 bg-white border-solid" id="features">
        <div class="mx-auto border-solid lg:pl-8 max-w-7xl">
            <div class="flex flex-col items-center text-gray-900 border-0 border-gray-200 lg:flex-row">
                <div
                    class="flex flex-col justify-center w-full h-full p-8 text-gray-900 border-solid lg:w-1/2 md:p-16 lg:p-0 lg:pl-10 lg:pr-20">
                    <h2 class="m-0 text-2xl font-bold text-left text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500 sm:text-4xl md:text-3xl">
                        Zašto baš mi?</h2>
                    <p class="mt-2 text-xl text-left border-0 border-gray-200">Nudimo vam najveći broj mogućnosti uz iznajmljivanje naše opreme</p>
                    <div class="grid gap-4 mt-8 border-0 border-gray-200 sm:mt-10 sm:gap-6 lg:mt-12 lg:gap-8">
                        <div class="flex items-start text-gray-900 border-solid ">
                            <div class="flex items-center justify-center w-12 h-12 bg-purple-600 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                            </div>
                            <div class="flex-1 ml-6 border-0 border-gray-200">
                                <h3 class="m-0 text-lg font-semibold text-black border-solid sm:text-xl md:text-2xl">
                                    Pomoć osoblja</h3>
                                <p class="mt-2 text-base leading-normal text-gray-900 border-solid ">Osoblje na raspolaganju svakim danom od 09:00 do 23:00</p>
                            </div>
                        </div>
                        <div class="flex items-start text-gray-900 border-solid ">
                            <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>

                            </div>
                            <div class="flex-1 ml-6 border-0 border-gray-200">
                                <h3 class="m-0 text-lg font-semibold text-black border-solid sm:text-xl md:text-2xl">
                                    Zaštitna oprema</h3>
                                <p class="mt-2 text-base leading-normal text-gray-900 border-solid ">Vaša sigurnost nam je na prvom mjestu, stoga uz svako iznajmljivanje dobivate kacigu.</p>
                            </div>
                        </div>
                        <div class="flex items-start text-gray-900 border-solid ">
                            <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>

                            </div>
                            <div class="flex-1 ml-6 border-0 border-gray-200">
                                <h3 class="m-0 text-lg font-semibold text-black border-solid sm:text-xl md:text-2xl">
                                    Plaćanje pri preuzimanju </h3>
                                <p class="mt-2 text-base leading-normal text-gray-900 border-solid ">Mogućnost otkazivanja rezervacije do zadnje stotinke!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white" id="blogs">
        <div class="w-full px-8 py-10 mx-auto lg:max-w-7xl">
            <div class="mb-4 text-center">
                <h3 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500">Naša Ponuda</h3>
            </div>
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
                @foreach($offers as $offer)
                    <div class="relative p-2 border border-indigo-600 rounded-md">

                        <div class="relative mt-5 mb-1">
                            <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600"></p>
                                <h2 class="text-2xl font-bold hover:text-gray-400">
                                    {{ $offer->name  }}</h2>
                            <p class="mb-4 text-gray-700">{{$offer->price}} KM</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
    </section>


    <section class="bg-white" id="blogs">
        <div id="contact" class="w-full px-8 py-10 mx-auto lg:max-w-7xl">



                <div class="w-full px-8 py-10 mx-auto lg:max-w-7xl flex flex-col items-center">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                        Kontakt
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                                  d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                            </path>
                        </svg>
                        Livno
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        AdriaRent@gmail.com
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        +387 63 843 421
                    </p>
                    <p class="flex items-center justify-center md:justify-start">
                        Svakim danom 09:00-23:00
                    </p>
                </div>
            </div>
        </div>
    </section>



    


</x-guest-layout>
