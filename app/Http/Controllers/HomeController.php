<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;

class HomeController extends Controller
{
    public function index() {
        $comicsVolumes = Comics::all();
        return view('home', compact('comicsVolumes'));
    }
}
