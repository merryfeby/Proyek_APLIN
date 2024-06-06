<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\screening;
use App\Models\studio;
use App\Models\Movie;
use App\Models\offer;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\Seat;
use App\Models\User;
use Carbon\Carbon;

class SeatController extends Controller
{
    public function showSeats(Request $request)
    {
        $screeningID = $request->screening_id;
        $movieID = $request->movie_id;
        
        $screening = Screening::with('studio', 'movie')->find($screeningID);
        $movie = Movie::find($movieID);
        $offer = offer::where('status',1)->get();
    
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
        return view('user_site.detailSeat', compact('screening', 'movie', 'startTimeFormatted', 'endTimeFormatted','seats','offer'));
    }

    public function checkout(Request $request){
        // $request->validate([
        //     'seats' => 'required',
        //     'screeningID' => 'required|numeric',
        //     'ticketprice' => 'required|numeric',
        // ]);

        $seats = $request->seats;

        if ($seats != null) {
            $seats = explode(',', $seats);
        }
        elseif ($seats == null) {
            $seats = [];
        }

        $screeningID = $request->screeningID;
        $customer = session('login')->username;
        $employee = 'emp';
        $subtotal = count($seats)* ($request->ticketprice);
        $grandtotal = $subtotal;
        $status = 1;
        $datauser = User::where('username', $customer)->first();
        $dataoffer = offer::where('id', $request->offerid)->first();
        // Create a new order



        if (count($seats) > 0) {
            if ($datauser->balance <= $dataoffer->max_trans) {
                $grandtotal = $grandtotal - ($grandtotal * $dataoffer->discount / 100);
            }
            else if($datauser->balance > $dataoffer->max){
                $tempbalance = $datauser->balance - $dataoffer->max;
                $grandtotaltemp = $grandtotal - ($grandtotal * $dataoffer->discount / 100);
                $grandtotal = $grandtotaltemp + $tempbalance;
            }
    
            if ($datauser->balance >= $grandtotal) {
                $datauser->balance = $datauser->balance - $grandtotal;
                $datauser->save();
                session(['login' => $datauser]);
            } else {
                return redirect()->route('home.index');
            }
    
            $order = order::create([
                'screeningID' => $screeningID,
                'offerID' => $dataoffer->id,
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
            return redirect()->route('home.index');
            // return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
            
        }else{
            return redirect()->route('home.index')->with('error', 'Seat ID is invalid. Please try again.');

        }



    }
    
}