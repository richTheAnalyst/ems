<nav class="relative z-10 px-4 py-4">
    <div class="max-w-7xl mx-auto bg-[#f093e6] rounded-[50px] px-6 py-4">
        <div class="flex flex-wrap items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="/images/logo.png" alt="PlanPro Logo" class="w-[87px] h-[85px]">
                <span class="text-[#0e0e0e] text-4xl font-semibold font-poppins">PLANPRO</span>
            </div>

            <!-- Hamburger Menu Button -->
            <button id="hamburger-button" type="button"
                class="lg:hidden inline-flex items-center justify-center p-2 w-10 h-10 text-gray-500 rounded-lg 
                hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <!-- Navigation Links -->
            <div class="hidden lg:flex flex-col lg:flex-row w-full lg:w-auto items-center space-y-4 lg:space-y-0" id="navbar-hamburger">
                <nav class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-2">
                    <a href="{{ route('home')}}" class="px-6 py-4 bg-[#f093e6] rounded-[40px] text-[#0e0e0e] text-2xl font-semibold font-poppins text-center lg:text-left hover:bg-[#e784d7] transition-colors">
                        Home
                    </a>

                    <!-- Dropdown Container -->
                    <div class="relative group flex justify-center">
                        <button class="px-6 py-4 bg-[#f093e6] rounded-[40px] text-[#0e0e0e] text-2xl font-semibold font-poppins hover:bg-[#e784d7] transition-colors whitespace-nowrap">
                            Pages
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute hidden group-hover:block top-full left-1/2 -translate-x-1/2 -pt-4 ">
                            <div class="bg-[#f093e6] rounded-[20px] p-2 shadow-lg min-w-[300px] -mt-4">
                                <a href="{{ route('about')}}" class="block w-full px-4 py-1 text-xl text-[#0e0e0e] hover:bg-[#e784d7] rounded-[20px] transition-colors whitespace-nowrap">About Us</a>
                                <a href="{{ route('faq')}}" class="block w-full px-4 py-1 text-xl text-[#0e0e0e] hover:bg-[#e784d7] rounded-[20px] transition-colors whitespace-nowrap">FAQ</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('event')}}" class="px-6 py-4 bg-[#f093e6] rounded-[40px] text-[#0e0e0e] text-2xl font-semibold font-poppins text-center lg:text-left hover:bg-[#e784d7] transition-colors">
                        Events
                    </a>
                    <a href="{{ route('blog')}}" class="px-6 py-4 bg-[#f093e6] rounded-[40px] text-[#0e0e0e] text-2xl font-semibold font-poppins text-center lg:text-left hover:bg-[#e784d7] transition-colors">
                        Blog
                    </a>
                    <a href="{{ route('contact')}}" class="px-6 py-4 bg-[#f093e6] rounded-[40px] text-[#0e0e0e] text-2xl font-semibold font-poppins text-center lg:text-left hover:bg-[#e784d7] transition-colors">
                        Contact
                    </a>

                </nav>
                <button class="w-full lg:w-auto bg-gradient-to-r from-[#20c9e7] to-[#f126dc] px-8 py-4 rounded-[30px] text-black text-2xl font-semibold font-poppins hover:opacity-60 transition-opacity">
                   Sign In
                </button>
            </div>
        </div>
    </div>
</nav>