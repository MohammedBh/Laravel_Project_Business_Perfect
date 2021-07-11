<?php

namespace App\Http\Controllers;

use App\Models\Backportfolio;
use Illuminate\Http\Request;

class BackportfolioController extends Controller
{
    public function index()
    {
        $backportfolios = Backportfolio::all();
        return view('pages.backoffice.backportfolio', compact('backportfolios'));
    }

    public function store(Request $request)
    {
        $store = new Backportfolio;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->img = $request->img;
        $store->save();
        return redirect('/backoffice/portfolio')->with('message', 'Your content was added successfully !');
    }
}
