<?php

namespace App\Http\Controllers;

use App\Models\Backblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogcontents = Backblog::all();
        return view('pages.blog', compact('blogcontents'));
    }
}
