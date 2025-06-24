<!DOCTYPE html>
<html>
<head>
    <title>New Booking Received</title>
</head>
<body>
   <h2>New Booking Notification</h2>
<p>A new room booking has been made. Here are the details:</p>
<ul>
    <li><strong>Email:</strong> {{ $details['email'] }}</li>
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

</body>
</html>
