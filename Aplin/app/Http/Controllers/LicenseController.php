<?php

namespace App\Http\Controllers;
use App\Models\Movie;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    function index(){
        $films = Movie::where('license',0)->get();
        return view("BeliFilm",[
            'films' => $films
        ]);
    }
    function beli(Request $request)
    {
        $movieId = $request->input('id');

        if (!$movieId) {
            return redirect()->back()->withErrors(['error' => 'Movie ID is required for license purchase.']);
        }

        $movie = Movie::find($movieId);

        if ($movie) {
            $movie->license = 1;
            $movie->save();
            return redirect()->back()->with('success', 'Movie license purchased successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Movie with ID ' . $movieId . ' not found.']);
        }
    }
}
