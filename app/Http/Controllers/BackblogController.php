<?php

namespace App\Http\Controllers;

use App\Models\Backblog;
use Illuminate\Http\Request;

class BackblogController extends Controller
{
    public function index()
    {
        $backblogs = Backblog::all();
        return view('pages.backoffice.backblog', compact('backblogs'));
    }

    public function store(Request $request)
    {
        $store = new Backblog;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->img = $request->img;
        $store->save();
        return redirect('/backoffice/blog')->with('message', 'Your content was added successfully !');
    }
}
