<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageCate;
use App\Page;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem;


class NewArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $file = new Filesystem();
        // //copier un dossier 
        // $file->copyDirectory('../resources/lang/en', '../resources/lang/ar');
        
        // //renomer un dossier
        // //$file->moveDirectory('../resources/lang/ar', '../resources/lang/en');
        // $bytes_written = new Filesystem();
        // $bytes_written->prepend('../resources/lang/ar/messages.php', "'anglais' => 'Anglais'");
        // $bytes_written->append('../resources/lang/ar/messages.php', "'anglais' => 'add in the end'"); 
        // if ($bytes_written === false)
        // {
        //     die("Error writing to file");
        // } 

        // if($file)
        // return 'true';
        // else 
        // return 'false';
        $pages = DB::table('pages')->where('type', '=', 'Article')->get();
        $countArticles = DB::table('pages')->where('type', '=', 'Article')->count();
        $cats = DB::table('categories')->get();
        $pageCates = DB::table('page_cates')->get();
        return view('pages.articles',compact('pages', 'countArticles', 'cats', 'pageCates'));
    }

    public function article()
    {
        $categories = DB::table('categories')->get();
        $select = [];
        foreach($categories as $categorie){
            $select[$categorie->id] = $categorie->nom;
        }
        return view('pages.Article.newArticle',compact('select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();

        $page->titre = $request->titre;
        $page->contenu = $request->content;
        $page->type = 'Article';
        $page->created_by = Auth::user()->id;
        $page->statu = $request->statu;
        $page->seo_titre = $request->seo_titre;
        $page->seo_description = $request->seo_description;

        $page->save();

        $id_page = DB::table('pages')->max('id');

        $categories = DB::table('categories')->where('id', '=', $request->categorie)->get(['id']);
        
        foreach($categories as $categorie){
            $id_cat = $categorie->id;

            $page_cate = new PageCate();
            $page_cate->id_page = $id_page;
            $page_cate->id_cate = $id_cat;

            $page_cate->save();
        }
        return redirect()->route("articles.index")->with("message","L'rticle a été ajouté avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, $id)
    {
        $pages = DB::table('pages')->where('id', '=', $id)->get();
        
        foreach($pages as $page){
            $selectCat[$page->id] = $page->titre;
        }
        return view('pages.Article.editArticle',compact('page', 'selectCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        DB::table('pages')->where('id', $id)->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'statu' => $request->statu,
            'seo_titre' => $request->seo_titre,
            'seo_description' => $request->seo_description
        ]);

        return redirect()->route('articles.index')->with('message',"L'article a été mis à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = DB::table('pages')->where('id', '=', $id)->delete();
        return redirect()->route('articles.index')->with('message',"L'article a été supprimé avec succès");
    }
}
