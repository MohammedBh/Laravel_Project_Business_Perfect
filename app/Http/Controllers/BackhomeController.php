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
        return redirect('/backoffice/home')->with('addmessage', 'Your content was added successfully !');
    }

    public function destroy($id){
        $destroy = Backhome::find($id);
        $destroy->delete();
        return redirect('/backoffice/home')->with('deletemessage', 'Your content was deleted successfully !');
    }
}
