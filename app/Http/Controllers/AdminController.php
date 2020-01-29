<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Article;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function photos(){

        $photos = Photo::where('imageable_type', null)->get();

        return view('admin.photos')->with([
            'photos' => $photos
        ]);
    }

    public function newPhoto(){
        return view('admin.newPhoto');
    }

    public function news(){

        $news = Article::with('photo')->get();

        return view('admin.news')->with([
            'news' => $news
        ]);
    }

    public function newNew(){
        return view('admin.newNew');
    }
}
