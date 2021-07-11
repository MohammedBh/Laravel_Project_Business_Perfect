<?php

namespace App\Http\Controllers;

use App\Models\Backhome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homecontents = Backhome::all();
        return view('welcome', compact('homecontents'));
    }
}
