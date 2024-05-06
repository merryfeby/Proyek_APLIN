<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class handleKaryawan extends Controller
{
    function listoffer(){
        $offer = offer::where('status',1)->get();
        // dd($employee);
        return view("addoffer",[
            'offer' => $offer
        ]);
    }

    function addoffer(Request $request){

        $data = new offer;
        $data->code = $request->code;
        $data->discount = $request->discount;
        $data->max_trans = $request->max;
 
        $data->save();

        // return view("list");
        return redirect()->back();
    }
}
