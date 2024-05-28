<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
	function index() {
		$movies = Movie::whereNotNull('license')->get();
		return view('user_site.movies', [
			'movie' => $movies
		]);
	}

	function showDetail($id) {
		$data = Movie::find($id);

		return view('user_site.detailMovie', compact('data'));
	}
}
