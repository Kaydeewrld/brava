<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate form input
        $validated = $request->validate([
            'email'      => 'required|email',
            'check_in'   => 'required|string',
            'check_out'  => 'required|string',
            'adult'      => 'required|string',
            'child'      => 'required|string',
            'room'       => 'required|string',
            'exbed'      => 'required|string',
            'base_price' => 'required|numeric',
            // Add any more fields as needed
        ]);

        // 2. Get room type (use an explicit hidden field or from the page context)
        // Option A: If you set a hidden input for room_type in your form
        $roomType = $request->input('room_type', 'Room Booking'); // fallback to 'Room Booking' if not set

        // 3. Calculate number of nights
        $checkIn  = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights   = $checkOut->diffInDays($checkIn);
        if ($nights < 1) $nights = 1;

        // 4. Calculate price
        $basePrice  = $request->base_price;
        $totalPrice = $basePrice * $nights;

        // Extra beds
        $extraBedPrice = 3000;
        $exbed = (int)$request->exbed;
        if ($exbed > 0) {
            $totalPrice += $extraBedPrice * $exbed * $nights;
        }

        // Add optional extras
        if ($request->has('clean')) $totalPrice += 3000 * $nights;
        if ($request->has('gym'))   $totalPrice += 3000 * $nights;
        if ($request->has('spa'))   $totalPrice += 3000 * $nights;

        // 5. Gather all details for emails
        $details = [
            'check_in'     => $request->check_in,
            'check_out'    => $request->check_out,
            'email'        => $request->email,
            'adult'        => $request->adult,
            'child'        => $request->child,
            'room'         => $request->room,
            'exbed'        => $request->exbed,
            'room_type'    => $roomType,
            'nights'       => $nights,
            'base_price'   => $basePrice,
            'total_price'  => $totalPrice,
            'extras'       => [
                'clean'   => $request->has('clean') ? 'Yes' : 'No',
                'parking' => $request->has('parking') ? 'Yes' : 'No',
                'gym'     => $request->has('gym') ? 'Yes' : 'No',
                'spa'     => $request->has('spa') ? 'Yes' : 'No',
            ],
        ];

        // 6. Send notification to hotel
        Mail::send('email.new_booking_notification', ['details' => $details], function ($message) use ($roomType) {
            $message->to('tryvarse@gmail.com')
                ->subject('New Room Booking: '.$roomType);
        });

        // 7. Send confirmation to guest
        Mail::send('email.booking_confirmation', ['details' => $details], function ($message) use ($request, $roomType) {
            $message->to($request->email)
                ->subject('Your Booking Confirmation - '.$roomType.' | Brava Hotel');
        });

        // 8. Redirect back with success
        return back()->with('success', 'Booking received! Check your email for confirmation.');
    }
}
