<x-layout>
    <header>
        <div class="w-full h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('images/event/Funeral.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 pt-32 lg:pt-48 xl:pt-56">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 drop-shadow-lg">
                        Plan Smart, Celebrate Big!
                    </h2>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 drop-shadow-xl">
                        FAQs
                    </h1>

                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">Frequently Asked Questions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-white">
        <div>
            <p class="text-pink-300 flex justify-center">//Most Questions</p>
        </div>
        <div class="max-w-7xl mx-auto px-6 py-12">
            <h2 class="text-3xl md:text-5xl font-black text-black text-center md:text-left mb-8">GENERAL QUESTIONS</h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-2xl font-bold">What types of events do you manage?</h3>
                    <p class="text-lg text-black-700">We specialize in weddings, funerals, seminars, corporate events, parties, and more.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">Do you offer full-service event planning?</h3>
                    <p class="text-lg text-black-700">Yes! We handle everything from venue selection and catering to decorations, entertainment, and logistics.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">How far in advance should I book your services?</h3>
                    <p class="text-lg text-black-700">We recommend booking at least 3-6 months in advance for major events, but we also handle last-minute requests based on availability.</p>
                </div>
            </div>

            <!-- Pricing & Packages -->
            <h2 class="text-3xl md:text-5xl font-black text-black mt-12">Pricing & Packages</h2>
            <div class="space-y-6 mt-4">
                <div>
                    <h3 class="text-2xl font-bold">How much do your event management services cost?</h3>
                    <p class="text-lg text-black-700">Our pricing varies based on the type of event, venue, guest count, and selected services. We offer budget-friendly and premium packages to suit different needs.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">Do you offer customizable packages?</h3>
                    <p class="text-lg text-black-700">Yes! You can choose from our standard packages or create a custom package based on your specific requirements.</p>
                </div>
            </div>

            <!-- Emergency & Last-Minute Bookings -->
            <h2 class="text-3xl md:text-5xl font-black text-black mt-12">Emergency & Last-Minute Bookings</h2>
            <div class="space-y-6 mt-4">
                <div>
                    <h3 class="text-2xl font-bold">Can you handle last-minute event planning?</h3>
                    <p class="text-lg text-black-700">Yes, we can accommodate last-minute bookings based on availability. Contact us as soon as possible for urgent events.</p>
                </div>
            </div>

            <!-- Special Discounts & Partnerships -->
            <h2 class="text-3xl md:text-5xl font-black text-black mt-12">Special Discounts & Partnerships</h2>
            <div class="space-y-6 mt-4">
                <div>
                    <h3 class="text-2xl font-bold">Do you offer discounts for bulk bookings or repeat clients?</h3>
                    <p class="text-lg text-black-700">Yes, we provide discounts for repeat clients, referrals, and bulk event bookings. Contact us for special offers.</p>
                </div>
            </div>
        </div>

    </section>
    @include('components.sponsor');
    @include('components.testimonial');
</x-layout>