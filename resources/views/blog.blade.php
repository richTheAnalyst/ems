<x-layout>
    <header>
        <div class="w-full h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('images/event/seminar1.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 pt-32 lg:pt-48 xl:pt-56">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 drop-shadow-lg">
                        Plan Smart, Celebrate Big!
                    </h2>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 drop-shadow-xl">
                        About Us
                    </h1>

                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">BLOGS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section>
        <h1 class="flex justify-center text-3xl text-pink-600 font-bold p-4 ">BLOGS</h1>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Event Card -->
                <div class="relative bg-white shadow-lg rounded-2xl p-2 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <img class="w-60 h-52 rounded-xl" src="{{ asset('images/about-1.jpg')}}" alt="Event Image" />
                    <div class="mt-4 text-lg font-medium text-gray-800">10 FEBRUARY, 2025</div>
                    <div class="mt-2 text-xl font-bold text-center">How to Plan a Perfect Wedding on Budget</div>
                    <button class="mt-4 px-6 py-2 bg-pink-500 text-white rounded-xl shadow-md transition-colors duration-300 hover:bg-pink-600">Read More</button>
                </div>

                <div class="relative bg-white shadow-lg rounded-2xl p-2 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <img class="w-60 h-52 rounded-xl" src="{{ asset('images/about-2.jpg')}}" alt="Event Image" />
                    <div class="mt-4 text-lg font-medium text-gray-800">10 FEBRUARY, 2025</div>
                    <div class="mt-2 text-xl font-bold text-center">Step-by-Step to Organize a Successful Seminar</div>
                    <button class="mt-4 px-6 py-2 bg-pink-500 text-white rounded-xl shadow-md transition-colors duration-300 hover:bg-pink-600">Read More</button>
                </div>

                <div class="relative bg-white shadow-lg rounded-2xl p-2 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <img class="w-60 h-52 rounded-xl" src="{{ asset('images/about-3.jpg')}}" alt="Event Image" />
                    <div class="mt-4 text-lg font-medium text-gray-800">10 FEBRUARY, 2025</div>
                    <div class="mt-2 text-xl font-bold text-center">Checklist for Hosting a Flawless Party</div>
                    <button class="mt-4 px-6 py-2 bg-pink-500 text-white rounded-xl shadow-md transition-colors duration-300 hover:bg-pink-600">Read More</button>
                </div>

                <div class="relative bg-white shadow-lg rounded-2xl p-2 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <img class="w-60 h-52 rounded-xl" src="{{ asset('images/about-1.jpg')}}" alt="Event Image" />
                    <div class="mt-4 text-lg font-medium text-gray-800">10 FEBRUARY, 2025</div>
                    <div class="mt-2 text-xl font-bold text-center">Common Mistakes to Avoid When Planning an Event</div>
                    <button class="mt-4 px-6 py-2 bg-pink-500 text-white rounded-xl shadow-md transition-colors duration-300 hover:bg-pink-600">Read More</button>
                </div>
            </div>
        </div>

    </section>


    @include('components.sponsor');
    @include('components.testimonial');
</x-layout>