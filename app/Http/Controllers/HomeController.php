<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pages = Page::all();
        // $categories = Categorie::all();
        // $countCategorie = Categorie::count();
        // $articles = Article::all();
        return view('home');
    }


    public function count()
    {
        // $events = [
        //     'countPage' => \App\Page::count(),
        //     'countMenu' => \App\Menu::count(),
        //     'countArt' => \App\Article::count(),
        //     'countCat' => \App\Categorie::count()
        // ];
    
        return view('home');
        //return view('home', ['countPage' => \App\Page::count()]);
    }
}
