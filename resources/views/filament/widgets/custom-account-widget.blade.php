<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center space-x-3">
            <img 
                src="{{ auth()->user()->profile_image 
                    ? asset('storage/profile_images/' . auth()->user()->profile_image) 
                    : asset('images/logo.jpg') }}" 
                alt="User Avatar"
                class="w-10 h-10 rounded-full"
            >
            <span class="text-gray-700 dark:text-gray-300 m-5 font-extrabold">
                {{ auth()->user()->name }}
            </span>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
