<x-layout>
    <header>
        <div class="w-full h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('images/about-1.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 pt-32 lg:pt-48 xl:pt-56">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 drop-shadow-lg">
                        Plan Smart, Celebrate Big!
                    </h2>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 drop-shadow-xl">
                        EVENTS
                    </h1>
                    
                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">Wedding Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>

@include('events.eventNav')

<section>
    <!-- Sections -->
    <div id="wedding" class="event-section">
    <div class="relative flex flex-wrap gap-4 justify-center">
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/about-1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
    </div>
</div>


    <div id="funeral" class="event-section hidden">
    <div class="relative flex flex-wrap gap-4 justify-center">
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/Funeral.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
    </div>
    </div>

    <div id="seminar" class="event-section hidden">
    <div class="relative flex flex-wrap gap-4 justify-center">
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar1.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/seminar.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
    </div>
    </div>

    <div id="birthday" class="event-section hidden">
    <div class="relative flex flex-wrap gap-4 justify-center ">
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4 ">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
        <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg p-4">
            <img class="w-full h-auto object-cover rounded-lg mb-4" src="{{ asset('images/event/birthday.jpg') }}" alt="">
            <a href="" class=" bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 hover:bg-gradient-to-l from-cyan-200 to-pink-400">
                BOOK
            </a>
        </div>
    </div>
    </div>
</section>

    @include('components.sponsor');
    @include('components.testimonial');
</x-layout>