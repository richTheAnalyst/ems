{{-- resources/views/components/countup-section.blade.php --}}
<section class="bg-[#fffbfb] py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-black mb-12 transition-transform duration-300 hover:scale-105">UP AND RUNNING DAYS</h2>
        
        <div class="grid grid-cols-4 gap-8">
            @foreach(['days', 'hours', 'minutes', 'seconds'] as $label)
                <div class="text-center">
                    <div class="bg-[#d9d9d9] rounded-[30px] p-8 mb-4 transition-all duration-300 hover:bg-gray-400 hover:shadow-lg">
                        <span class="text-lg sm:xl md:2xl lg:3xl font-bold text-black transition-colors duration-300 hover:text-green" id="{{ $label }}">0</span>
                    </div>
                    <span class="text-lg sm:xl md:2xl lg:3xl font-bold text-black transition-transform duration-300 hover:scale-110">{{ strtoupper($label) }}</span>
                </div>
            @endforeach
        </div>
    </div>  
</section>