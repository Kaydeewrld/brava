<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
  <h2>Booking Confirmation</h2>
<p>Dear Guest,</p>
<p>Thank you for booking with Brava Hotel! Here are your booking details:</p>
<ul>
    <li><strong>Check In:</strong> {{ $details['check_in'] }}</li>
    <li><strong>Check Out:</strong> {{ $details['check_out'] }}</li>
    <li><strong>Adults:</strong> {{ $details['adult'] }}</li>
    <li><strong>Children:</strong> {{ $details['child'] }}</li>
    <li><strong>Room(s):</strong> {{ $details['room'] }}</li>
    <li><strong>Extra Bed(s):</strong> {{ $details['exbed'] }}</li>
    <li><strong>Room Clean:</strong> {{ $details['extras']['clean'] }}</li>
    <li><strong>Parking:</strong> {{ $details['extras']['parking'] }}</li>
    <li><strong>Gym:</strong> {{ $details['extras']['gym'] }}</li>
    <li><strong>Spa:</strong> {{ $details['extras']['spa'] }}</li>
</ul>
<p><strong>Room Booked:</strong> {{ $details['room_type'] ?? $details['room'] ?? 'N/A' }}</p>
<p><strong>Amount to Pay:</strong> ₦{{ number_format($details['total_price'] ?? 0) }}</p>

<p><strong>Account Name:</strong> Brava Hotel</p>
<p><strong>Account Number:</strong> 0123456789</p>
<p><strong>Bank Name:</strong> Zenith Bank</p>
<p>Please reply to this email with evidence of payment to complete your booking.</p>

<p>We look forward to hosting you!</p>

</body>
</html>
