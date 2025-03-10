<x-layout>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg mb-5">
        <!-- Event Banner -->
        <div class="relative">
            <img src="{{ Storage::url($event->banner_image) }}" alt="{{ $event->title }}" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                <h1 class="text-3xl text-white font-bold">{{ $event->title }}</h1>
            </div>
        </div>

        <!-- Event Details -->
        <div class="mt-6">
            <h2 class="text-2xl font-bold">{{ $event->title }}</h2>
            <p class="text-gray-700 mt-2">{{ $event->description }}</p>

            <div class="grid grid-cols-2 gap-4 mt-4">
                <p><strong>Venue:</strong> {{ $event->venue->name }}</p>
                <p><strong>Status:</strong> {{($event->status) }}</p>
                <p><strong>Capacity:</strong> {{ $event->capacity }} People</p>
                <p><strong>Price:</strong> ${{ number_format($event->price, 2) }}</p>
                <p><strong>Category:</strong> {{ ucfirst($event->category) }}</p>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="mt-6 ">
            <h3 class="text-xl font-semibold mb-4">Book Your Spot</h3>
            <form action="{{ route('book.event.submit', $event->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-semibold">Your Name</label>
                    <input type="text" name="name" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label class="block font-semibold">Email Address</label>
                    <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label class="block font-semibold">Phone Number</label>
                    <input type="text" name="phone" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label class="block font-semibold">Number of Seats</label>
                    <input type="number" name="seats" min="1" max="{{ $event->capacity }}" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label class="block font-semibold">Event Gist</label>
                    <textarea name="gist" class="w-full p-2 border rounded-lg"></textarea>
                </div>
                <input type="hidden" name="event_id" value="{{ $event->id }}">


                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700">
                    Submit Booking
                </button>
            </form>


        </div>
    </div>
</x-layout>