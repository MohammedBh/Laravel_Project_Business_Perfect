<?php

namespace App\Http\Controllers;

use App\Models\Backhome;
use Illuminate\Http\Request;

class BackhomeController extends Controller
{
    public function index()
    {
        $backhomes = Backhome::all();
        return view('pages.backoffice.backhome', compact('backhomes'));
    }

    public function store(Request $request)
    {
        $store = new Backhome;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->icon = $request->icon;
        $store->save();
        return redirect('/backoffice/home')->with('message', 'Your content was added successfully !');
    }
}
