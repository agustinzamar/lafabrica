<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::with('photo')->latest()->limit(3)->get();

        return view('index')->with([
            'articles' => $articles
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        $articles = Article::with('photo')->latest()->get();

        return view('news')->with([
            'articles' => $articles
        ]);
    }

    /* Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function new($id)
   {
       $article = Article::with('photo')->find($id);

       return view('new')->with([
           'article' => $article
       ]);
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function projects()
    {
        $projects = Project::with('photos')->get();

        return view('projects')->with([
            'projects' =>  $projects
        ]);
    }
}
