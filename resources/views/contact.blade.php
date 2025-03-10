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
                        Contact
                    </h1>

                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- resources/views/components/contact-footer.blade.php -->
    <div class="w-full bg-[#f093e6] py-8">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Contact Us -->
            <div class="text-center transition-transform hover:-translate-y-2 duration-300">
                <img src="{{ asset('images/Contact/contact.jpg') }}" alt="Contact" class="w-24 h-24 rounded-full mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <h3 class="text-2xl font-bold text-white mb-3">Contact Us</h3>
                <p class="text-2xl font-bold text-white hover:text-pink-200 transition-colors duration-300">
                    +233 24 564 6788
                </p>
            </div>

            <!-- Address -->
            <div class="text-center transition-transform hover:-translate-y-2 duration-300">
                <img src="{{ asset('images/Contact/address.jpg') }}" alt="Address" class="w-24 rounded-full h-[106px] mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <h3 class="text-2xl font-bold text-white mb-3">Our Address</h3>
                <p class="text-2xl font-bold text-white hover:text-pink-200 transition-colors duration-300">
                    Accra, Ghana
                </p>
            </div>

            <!-- Mail -->
            <div class="text-center transition-transform hover:-translate-y-2 duration-300">
                <img src="{{ asset('images/Contact/mail.jpg') }}" alt="Mail" class="w-24 h-24 rounded-full mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <h3 class="text-2xl font-bold text-white mb-3">Mail Us 24/7</h3>
                <p class="text-2xl font-bold text-white hover:text-pink-200 transition-colors duration-300">
                    cschild@gmail.com
                </p>
            </div>

            <!-- Working Time -->
            <div class="text-center transition-transform hover:-translate-y-2 duration-300">
                <img src="{{ asset('images/Contact/workingtime.jpg') }}" alt="Time" class="w-24 h-[105px] rounded-full mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <h3 class="text-2xl font-bold text-white mb-3">Working Time</h3>
                <p class="text-2xl font-bold text-white hover:text-pink-200 transition-colors duration-300">
                    Mon-Sun from 9:00am -6:00pm
                </p>
            </div>
        </div>
    </div>

    <!-- resources/views/components/contact-form.blade.php -->
    <div class="w-full bg-[#f8f6f6] rounded-bl-[50px] rounded-br-[50px] py-6 mb-5 mt-5">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Header -->
            <div class="text-center">
                <h2 class="text-[#f093e6] text-3xl font-bold mb-4">//Register</h2>
                <h1 class="text-black text-6xl font-bold mb-4">Do You Have Any Question?</h1>
                <p class="text-black text-4xl font-bold">Feel free to Contact Us!</p>
            </div>

            <!-- Content Grid -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Image -->
                <div class="hidden lg:block">
                    <img src="{{ asset('images/about-4.jpg') }}" alt="Contact" class="w-full h-auto rounded-[30px] object-cover">
                </div>

                <!-- Form -->
                <div class="bg-white rounded-[40px] p-8 shadow-lg">
                    <h3 class="text-[#4d4c4c] text-3xl font-bold mb-8">
                        For more enquires, fill out the form fields to book or register.
                    </h3>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div class="relative">
                                <input type="text" name="name" placeholder="Name"
                                    class="w-full h-[74px] bg-white rounded-[30px] border border-[#6d6b6b] px-8 text-xl
                                focus:outline-none focus:border-[#f093e6] focus:ring-2 focus:ring-[#f093e6] transition-all">
                            </div>

                            <!-- Email -->
                            <div class="relative">
                                <input type="email" name="email" placeholder="Email"
                                    class="w-full h-[74px] bg-white rounded-[30px] border border-[#6d6b6b] px-8 text-xl
                                focus:outline-none focus:border-[#f093e6] focus:ring-2 focus:ring-[#f093e6] transition-all">
                            </div>

                            <!-- Phone -->
                            <div class="relative">
                                <input type="tel" name="phone" placeholder="Phone"
                                    class="w-full h-[74px] bg-white rounded-[30px] border border-[#6d6b6b] px-8 text-xl
                                focus:outline-none focus:border-[#f093e6] focus:ring-2 focus:ring-[#f093e6] transition-all">
                            </div>

                            <!-- Subject -->
                            <div class="relative">
                                <input type="text" name="subject" placeholder="Subject"
                                    class="w-full h-[74px] bg-white rounded-[30px] border border-[#6d6b6b] px-8 text-xl
                                focus:outline-none focus:border-[#f093e6] focus:ring-2 focus:ring-[#f093e6] transition-all">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="relative">
                            <textarea name="message" placeholder="Message" rows="4"
                                class="w-full bg-white rounded-[30px] border border-[#6d6b6b] px-8 py-4 text-xl
                            focus:outline-none focus:border-[#f093e6] focus:ring-2 focus:ring-[#f093e6] transition-all"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="group relative bg-gradient-to-r from-[#20c9e7] to-[#f126dc] text-black font-semibold px-8 py-4 rounded-[30px] 
                            hover:bg-gradient-to-l from bg-pink-400 to bg-cyan-400 transition-all duration-300">
                                <span class="flex items-center">
                                    Contact Us
                                    <svg class="ml-2 w-6 h-6 transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.000976562 20.658L18.1553 4.02731H6.85814V0.886475H24.0011V16.5906H20.5725V6.2416L2.41813 22.8723L0.000976562 20.658Z" fill="white" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="map-container">
        <x-leafLetMap />
    </div>


    @include('components.sponsor')
</x-layout>