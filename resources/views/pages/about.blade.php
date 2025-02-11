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
                        About Us
                    </h1>
                    
                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-4 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
            <div class="relative group">
                <div class="absolute -inset-2 bg-gradient-to-r from-pink-400 to-blue-400 rounded-3xl blur opacity-25 group-hover:opacity-40 transition-opacity"></div>
                <img 
                    class="w-full rounded-2xl lg:rounded-3xl shadow-xl transform group-hover:scale-[1.02] transition-transform"
                    src="{{ asset('images/team/mem5.jpg')}}" 
                    alt="Our dedicated PLANPRO team member"
                />
            </div>

            <div class="space-y-8">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-pink-400 to-blue-500 bg-clip-text text-transparent">
                    Why Choose PLANPRO?
                </h2>
                
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    At PLANPRO, we transform ordinary events into extraordinary experiences. 
                    Our team of passionate professionals combines creativity with precision 
                    to deliver unforgettable celebrations. From intimate gatherings to 
                    grand corporate events, we handle every detail with care and expertise.
                </p>

                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <span>500+ Successful Events Planned</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <span>Customized Planning Solutions</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <span>24/7 Client Support</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
   @include('components.sponsor')
   @include('components.testimonial')
</x-layout>