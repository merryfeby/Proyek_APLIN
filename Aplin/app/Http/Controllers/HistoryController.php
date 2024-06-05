<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orderdetail;
use App\Models\order;
class HistoryController extends Controller
{
    function index() {
        $orders = Order::with('orderDetails.seat', 'screening.movie')
            ->where('customer', session('login')->username)
            ->get();
        return view('user_site.historyTicket', ['orders' => $orders]);
        }
}
