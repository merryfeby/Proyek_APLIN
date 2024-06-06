<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\screening;
use App\Models\studio;
use App\Models\Movie;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\Seat;
use Carbon\Carbon;

class SeatController extends Controller
{
    public function showSeats(Request $request)
    {
        $screeningID = $request->screening_id;
        $movieID = $request->movie_id;
        
        $screening = Screening::with('studio', 'movie')->find($screeningID);
        $movie = Movie::find($movieID);
    
        $startTime = Carbon::parse($screening->starttime);
        $endTime = $startTime->copy()->addMinutes($movie->duration);
        $startTimeFormatted = $startTime->format('H:i');
        $endTimeFormatted = $endTime->format('H:i');

        $studioId = $screening->studioID;
        $studio = Studio::with('seats')->find($studioId);
        $seats = null;
        if ($studio) {
            $seats = $studio->seats;
        }
        return view('user_site.detailSeat', compact('screening', 'movie', 'startTimeFormatted', 'endTimeFormatted','seats'));
    }

    public function checkout(Request $request){
        $seats = $request->seats;
        $seats = explode(',', $seats);
        $screeningID = $request->screeningID;
        $customer = session('login')->username;
        $employee = 'emp';
        $subtotal = count($seats)* ($request->ticketprice);
        $grandtotal = $subtotal;
        $status = 1;

        // Create a new order
        $order = order::create([
            'screeningID' => $screeningID,
            'customer' => $customer,
            'employee' => $employee,
            'subtotal' => $subtotal,
            'grandtotal' => $grandtotal,
            'status' => $status,
            // Add other order fields as needed
        ]);

        // Insert order details for each seat
        foreach ($seats as $seatId) {
            orderdetail::create([
                'orderNumber' => $order->orderNumber,
                'seatID' => $seatId,
                'price' => $request->ticketprice, // Set the price for this seat as needed
                // Add other order detail fields as needed
            ]);
        }

        // Optionally, you can return a response or redirect
        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);

    }
    
}