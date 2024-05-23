<?php

namespace App\Http\Controllers;

use App\Models\offer;
use App\Models\order;
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
        $request->validate([
            'code' => 'required|string',
            'discount' => 'required|numeric|min:0|max:100',
            'max' => 'required|numeric|min:0',
        ]);

        try{
            $data = new offer;
            $data->code = $request->code;
            $data->discount = $request->discount;
            $data->max_trans = $request->max;
     
            $data->save();
    
            // return view("list");
            return redirect('/addoffer')->with('success','Add offer success');
        }catch(\Exception $e){
            return redirect('/addoffer')->with('error', 'Error');
        }
    }

    function updateoffer(Request $request){

        $data = offer::find($request->input('id'));

        $request->validate([
            'code' => 'required|string',
            'discount' => 'required|numeric|min:0|max:100',
            'max' => 'required|numeric|min:0',
        ]);
        
        if ($data) {
            // Update the offer details
            $data->code = $request->input('code');
            $data->discount = $request->input('discount');
            $data->max_trans = $request->input('max');
            
            // Save the changes
            $data->save();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Offer updated successfully.');
        } else {
            // Redirect back with an error message if the offer is not found
            return redirect()->back()->with('error', 'Offer not found.');
        }
    }

    function deleteoffer(Request $request){
        $data = Offer::find($request->input('id'));

        if ($data) {
            $data->status = 0;  
            $data->save();

            return redirect()->back()->with('success', 'Offer deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Offer not found.');
        }

    }

    function listHistory(){
        $history = order::where('status',1)->get();
        return view("historytrans",[
            'history' => $history
        ]);
    }
}
