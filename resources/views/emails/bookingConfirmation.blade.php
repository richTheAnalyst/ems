<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
</head>

<body>
    <h1>Thank you for your booking!</h1>

    <p>Dear {{ $booking->name }},</p>

    <p>Your booking for "{{ $booking->event->title ?? 'N/A' }}" has been confirmed!</p>

    <div>
        <h3>Booking Details</h3>
        <p><strong>Event:</strong> {{ $booking->event->title ?? 'N/A' }}</p>
        <p><strong>Date:</strong> {{ $booking->event->date ? $booking->event->date->format('F d, Y') : 'N/A' }}</p>
        <p><strong>Venue:</strong> {{ $booking->event->venue->name ?? 'N/A' }}</p>
        <p><strong>Organizer:</strong> {{ $booking->event->organizer->name ?? 'N/A' }}</p>
        <p><strong>Number of Seats:</strong> {{ $booking->seats }}</p>
        <p><strong>Total Price:</strong> ${{ number_format($booking->seats * ($booking->event->price ?? 0), 2) }}</p>
    </div>

    <div>
        <h3>Organizer Information</h3>
        <p><strong>Name:</strong> {{ $booking->event->user->name ?? 'N/A' }}</p>
        <p><strong>Phone:</strong> {{ $booking->event->user->phone ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $booking->event->user->email ?? 'N/A' }}</p>
    </div>

    <p>If you have any questions or need to make changes to your booking, please contact the event organizer.</p>

    <p>Thank you for choosing our services!</p>
</body>

</html>