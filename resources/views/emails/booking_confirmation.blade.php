<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body style="font-family: Arial, sans-serif;">

    <h2>Hello {{ $booking->name }},</h2>

    <p>Thank you for booking your event at <strong>KiteBeach</strong> 🌊</p>

    <p><strong>Booking Details:</strong></p>

    <ul>
        <li>Package: {{ $booking->package }}</li>
        <li>Date: {{ $booking->event_date }}</li>
        <li>Guests: {{ $booking->guests }}</li>
    </ul>

    <p>We will contact you soon for further confirmation.</p>

    <br>
    <p>Regards,</p>
    <p><strong>KiteBeach Team</strong></p>

</body>
</html>