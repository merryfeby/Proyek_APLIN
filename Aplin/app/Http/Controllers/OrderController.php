<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\location;
use App\Models\offer;
use App\Models\screening;
use App\Models\studio;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() {
        return view('user_site.detailBuyTicket');
    }

    function showDetail($id) {
		$data = Movie::with('screening.studio')->find($id);
        $studioName = $data->screening->first()->studio->name ?? 'No studio found';
        $location = location::all();
        

        $studios = Studio::whereIn('id', function ($query) use ($id) {$query->select('studioID')->distinct()->from('screening')->where('movieID', $id);})->get();

        $screeningsByStudio = [];
        foreach ($data->screening as $screening) {
            $screeningsByStudio[$screening->studioID][] = $screening;
        }
		return view('user_site.detailBuyTicket', compact('data', 'studioName','location','studios', 'screeningsByStudio'));
    }
}
