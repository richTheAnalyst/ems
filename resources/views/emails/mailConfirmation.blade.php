<x-layout>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg mb-5">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-green-600">Booking Confirmed!</h1>
            <p class="mt-2">Thank you for booking with us. A confirmation email has been sent to {{ $booking->email }}.</p>
            
            <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                <h2 class="text-xl font-bold">Booking Details</h2>
                <div class="mt-4 grid grid-cols-2 gap-4">
                    <p><strong>Event:</strong> {{ $booking->event->title }}</p>
                    <p><strong>Venue:</strong> {{ $booking->event->venue->name }}</p>
                    <p><strong>Seats:</strong> {{ $booking->seats }}</p>
                    <p><strong>Total:</strong> ${{ number_format($booking->seats * $booking->event->price, 2) }}</p>
                </div>
            </div>
            
            <div class="mt-6">
                <a href="{{ route('home') }}" class="inline-block bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</x-layout>