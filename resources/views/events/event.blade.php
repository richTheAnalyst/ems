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
    @foreach (['wedding', 'funeral', 'seminar', 'birthday'] as $category)
        <div id="{{ $category }}" class="event-section {{ $loop->first ? '' : 'hidden' }}">
            <div class="relative flex flex-wrap gap-4 justify-center">
                @foreach ($events->where('category', $category) as $event)
                    <div class="w-52 lg:w-64 overflow-hidden rounded-lg shadow-lg group p-10">
                        <!-- Image with hover effect -->
                        <img src="{{ asset('storage/' . $event->banner_image) }}" alt="{{ $event->title }}" 
                        class="w-full h-auto object-cover rounded-lg mb-4 group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        <!-- Hover effect on the BOOK button -->
                        <a href="{{ route('book.event', $event->id) }}" 
                           class="bg-gradient-to-r from-cyan-400 to-pink-400 rounded-md font-semibold p-2 group-hover:from-cyan-500 group-hover:to-pink-500 group-hover:scale-105 transition-all duration-300 ease-in-out">
                            BOOK
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>

    @include('components.sponsor');
    @include('components.testimonial');
</x-layout>