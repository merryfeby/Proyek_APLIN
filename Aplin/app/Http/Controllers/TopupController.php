<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopupController extends Controller
{
    function index() {
        return view('user_site.topup');
    }

    function process(Request $req) {
        $req->validate([
            'amount' =>'required|integer|min:1',
        ]);
        
        try {
            $data = $req->all();
    
            $topup = Topup::create([
                'customer' => session('login')->username,
                'amount' => $data['amount'],
            ]);
    
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
    
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $data['amount'],
                ),
                'customer_details' => array(
                    'first_name' => session('login')->username,
                    'email' => session('login')->email,
                ),
             );
            
            $snapToken = \Midtrans\Snap::getSnapToken($params);
    
            $topup->snap_token = $snapToken;
            $topup->save();
    
            return redirect()->route('topup.checkout', $topup->id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request. Please try again.']);
        }
    }

    function checkout(Topup $topup) {
        $data = Topup::where('id', $topup->id)->first();
        return view('user_site.checkout', compact('topup', 'data'));
    }


    function success(Topup $topup) {
        $topup->status = 1;
        $topup->save();

        $user = User::find($topup->customer);
        $user->increment('balance', $topup->amount);

        session(['login' => $user]);

        return redirect()->route('topup.index');
    }
    
}
// <?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Topup;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;

// class TopupController extends Controller
// {
//     function index() {
//         return view('user_site.topup');
//     }

//     function process(Request $req) {
//         $req->validate([
//             'amount' =>'required|integer|min:1',
//         ]);

//         $data = $req->all();

//         $topup = Topup::create([
//             'customer' => session('login')->username,
//             'amount' => $data['amount'],
//         ]);

//         // Set your Merchant Server Key
//         \Midtrans\Config::$serverKey = config('midtrans.serverKey');
//         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
//         \Midtrans\Config::$isProduction = false;
//         // Set sanitization on (default)
//         \Midtrans\Config::$isSanitized = true;
//         // Set 3DS transaction for credit card to true
//         \Midtrans\Config::$is3ds = true;

//         $params = array(
//             'transaction_details' => array(
//                 'order_id' => rand(),
//                 'gross_amount' => $data['amount'],
//             ),
//             'customer_details' => array(
//                 'first_name' => session('login')->username,
//                 'email' => session('login')->email,
//             ),
//          );
        
//         $snapToken = \Midtrans\Snap::getSnapToken($params);

//         $topup->snap_token = $snapToken;
//         $topup->save();

//         return redirect()->route('topup.checkout', $topup->id);
//     }

//     function checkout(Topup $topup) {
//         $data = Topup::where('id', $topup->id)->first();
//         return view('user_site.checkout', compact('topup', 'data'));
//     }


//     function success(Topup $topup) {
//         $topup->status = 1;
//         $topup->save();

//         $user = User::find($topup->customer);
//         $user->increment('balance', $topup->amount);

//         session(['login' => $user]);

//         return redirect()->route('topup.index');
//     }
    
// }
