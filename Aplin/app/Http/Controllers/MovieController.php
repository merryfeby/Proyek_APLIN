<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\screening;
use Illuminate\Http\Request;

class MovieController extends Controller
{
	function index() {
		// $movies = Movie::whereNotNull('license')->get();
		$movies = Movie::where('license',1)->get();
		return view('user_site.movies', [
			'movie' => $movies
		]);
	}

	function showDetail($id) {
		$data = Movie::find($id);
		$hasScreening = screening::where('movieID',$id)->exists();
		return view('user_site.detailMovie', compact('data', 'hasScreening'));
	}

	function search(Request $req) {
		$search = $req->input('username');

		$movies = Movie::where('title', 'like', '%' . $search . '%')
										->where('license', 1)
										->get();

		return response()->json(['movies' => $movies]);
	}
}
