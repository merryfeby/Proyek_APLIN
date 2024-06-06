<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Movie;
use App\Models\offer;
use App\Models\order;
use App\Models\screening;
use App\Models\studio;
use Illuminate\Http\Request;
session_start();
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
            $data->code = $request->input('code');
            $data->discount = $request->input('discount');
            $data->max_trans = $request->input('max');
            
            $data->save();
    
            return redirect()->back()->with('success', 'Offer updated successfully.');
        } else {
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

    function listmovie(){
        $listmovie = screening::with('movie')
                            ->with('studio')
                            // ->where('status',1)
                            // ->whereNotNull('license')
                            ->get();
        $studio = studio::where('status',1)->get();
        $movie = Movie::where('status',1)->get();
        return view("listmoviekar",[
            'listmovie' => $listmovie,
            'studio' => $studio
        ]);
    }
    function listfilm(){
        $movie = Movie::where('status',1)->whereNotNull('license')
                        ->get();
        return view("editmovie",[
            'movie' => $movie
        ]);
    }

    function listmovies(){
        $listmovie = Movie::where('status',1)
                            ->whereNotNull('license')
                            ->whereHas('screening')
                            ->get();

        $studio = studio::where('status',1)->get();
        return view("addmoviekar",[
            'listmovie' => $listmovie,
            'studio' => $studio
        ]);
    }

    
    function listemployee(){
        $employee = Employee::where('status',1)->where('username', session('login'))->get();
        return view("menukaryawan",[
            'employee' => $employee
        ]);
    }

    function addscreening(Request $request){
        $request->validate([
            'movie_id' => 'required|integer|exists:movie,id',
            'date' => 'required|date_format:Y-m-d\TH:i',
            'studio' => 'required|exists:studio,id',
        ]);

        $cek = screening::where('movieID',$request->input('movie_id'))
                        ->where('studioID',$request->input('studio'))
                        ->get();

        if (!$cek) {
            try{
                $screening = new screening();
                $screening->movieID = $request->input('movie_id');
                $screening->starttime = $request->input('date');
                $screening->studioID = $request->input('studio');
                $screening->save();
                return redirect()->back()->with('success', 'Screening added successfully.');
            }catch(\Exception $e){
                return redirect()->back()->with('error', 'Error');
            }    
        }else {
            return redirect()->back()->with('error', 'Screening already exist.');
        }


    }

    function editScreen(Request $request){
        $data = screening::find($request->input('id'));

        $request->validate([
            'movieID' => 'required|integer|exists:movie,id',
            'tayang' => 'required|date_format:Y-m-d\TH:i',
            'studioID' => 'required|exists:studio,id',
        ]);
        
        if ($data) {
            $data->movieID = $request->input('movieID');
            $data->studioID = $request->input('studioID');
            $data->starttime = $request->input('tayang');
            
            $data->save();
    
            return redirect()->back()->with('success', 'Screening updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Screening not found.');
        }
        
    }
    function editMovie(Request $request){
        $data = Movie::find($request->input('id'));

        $request->validate([
            'duration' => 'required|integer|min:0',
        ]);
        
        if ($data) {
            $data->title = $request->input('title');
            $data->duration = $request->input('duration');
            $data->poster = $request->input('poster');
            $data->synopsis = $request->input('synopsis');
            
            $data->save();
    
            return redirect()->back()->with('success', 'Movie updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        
    }

    function deleteScreen(Request $request){
        $data = screening::find($request->input('id'));

        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Screening deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Screening not found.');
        }
    }

    function deleteFilm(Request $request){
        $data = Movie::find($request->input('id'));

        if ($data) {
            $data->status = 0;
            return redirect()->back()->with('success', 'Movie deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Movie not found.');
        }
    }

    function logout()
    {
        session()->flush();
        return redirect('/');
    }

}
