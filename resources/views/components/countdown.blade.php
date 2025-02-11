{{-- resources/views/components/countdown-section.blade.php --}}
<section class="bg-[#fffbfb] py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-black mb-12">Never Miss Another Speaker Announcement</h2>
        
        <div class="grid grid-cols-4 gap-8">
            @foreach([
                ['2', 'DAYS'],
                ['45', 'HOURS'],
                ['123', 'MINUTES'],
                ['256', 'SECONDS']
            ] as [$number, $label])
                <div class="text-center">
                    <div class="bg-[#d9d9d9] rounded-[30px] p-8 mb-4">
                        <span class="text-4xl font-bold text-black">{{ $number }}</span>
                    </div>
                    <span class="text-xl font-bold text-black">{{ $label }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>