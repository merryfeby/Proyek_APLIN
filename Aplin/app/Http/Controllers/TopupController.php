<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    function index() {
        return view('user_site.topup');
    }
}
