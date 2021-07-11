<?php

namespace App\Http\Controllers;

use App\Models\Backportfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Backportfolio::all();
        return view("pages.portfolio", compact("portfolios"));
    }
}