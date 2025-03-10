{{-- resources/views/components/about-section.blade.php --}}
<section class="py-8 md:py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Image Grid -->
            <div class="order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-4">
                    <img 
                        src="{{ asset('images/about-1.jpg') }}" 
                        alt="About" 
                        class="rounded-[30px] w-full h-auto object-cover"
                    >
                    <img 
                        src="{{ asset('images/about-2.jpg') }}" 
                        alt="About" 
                        class="rounded-[30px] mt-0 lg:mt-12 w-full h-auto object-cover"
                    >
                    <img 
                        src="{{ asset('images/about-3.jpg') }}" 
                        alt="About" 
                        class="rounded-[30px] w-full h-auto object-cover"
                    >
                </div>
            </div>
            
            <!-- Content -->
            <div class="order-1 lg:order-2">
                <h3 class="text-[#f093e6] text-2xl md:text-3xl font-bold mb-3 md:mb-4">
                    About Us
                </h3>
                <h2 class="text-2xl md:text-3xl font-black text-black mb-6 md:mb-8">
                    Welcome to Breaking Barriers: A Seminar of Change!
                </h2>
                <p class="text-lg md:text-2xl text-black mb-6 md:mb-8">
                    We are thrilled to have you join us on this transformative journey. Today, we come together to challenge limits, embrace new perspectives, and ignite meaningful change. Get ready to be inspired, engage with like-minded individuals, and take bold steps toward a better future. Let's break barriers and create lasting impact!
                </p>
                
                <div class="flex flex-col sm:flex-row justify-between gap-4 mb-8 md:mb-12">
                    <span class="text-black font-bold text-center sm:text-left">Up to 100 Guests</span>
                    <span class="text-black font-bold text-center sm:text-left">Free Entry Tickets</span>
                </div>
                
                <a href="{{ route('event') }}" class="w-full sm:w-auto bg-[#bd8555] text-black px-6 md:px-8 py-4 md:py-6 rounded-[30px] text-xl md:text-3xl font-bold hover:bg-[#a67447] transition-colors">
                    View our schedule
                </a>
            </div>
        </div>
    </div>
</section>