<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() {
        return view('user_site.detailBuyTicket');
    }

    function showDetail($id) {
		$data = Movie::with('screening.studio')->find($id);
        $studioName = $data->screening->first()->studio->name ?? 'No studio found';
		return view('user_site.detailBuyTicket', compact('data', 'studioName'));
    }
}
