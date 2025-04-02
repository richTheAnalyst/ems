{{-- resources/views/components/pricing-section.blade.php --}}
<section class="bg-white py-16 rounded-[20px] md:rounded-[50px] ">
    <div class="max-w-7xl mx-auto px-4 ">
        <span class="text-[#f093e6] text-base font-bold">// OUR PRICING</span>
        <h2 class="text-4xl font-bold text-black mb-12">Get Your Tickets Today!</h2>

        <div class="grid grid-cols-3 gap-8">
            @foreach([
                ['Basic Services', '$566', '#beeef6'],
                ['Classic Package', '$876', '#f299e9'],
                ['Deluxe Package', '$4231', '#c0a0e9']
            ] as [$package, $price, $bgColor])
            <div class="rounded-[30px] p-6 transform hover:-translate-y-1 transition-transform text-center"
     style="background-color: {{ $bgColor }}">
    
    <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-black mb-4">
        {{ $package }}
    </h3>
    
    <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-black mb-8">
        {{ $price }}
    </p>
    
    <button class="w-full bg-[#d9d9d9] text-black text-lg sm:text-xl md:text-2xl font-medium py-3 rounded-[20px] hover:bg-gray-800 hover:text-white transition-colors">
        Get Ticket
    </button>

</div>

            @endforeach
        </div>
    </div>
</section>