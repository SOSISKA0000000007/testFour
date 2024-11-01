<?php

namespace App\Http\Controllers;
use App\Models\Advertisement;

//use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Advertisement::all();
        return view('index', compact('posts'));
    }
}
