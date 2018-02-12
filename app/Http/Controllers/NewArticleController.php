<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\PageCate;
use App\Page;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem;
use Session;
use URL;
use App;


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
        $langs = DB::table('langues')->get();
        $categories = DB::table('categories')->get();
        $select = [];
        foreach($categories as $categorie){
            $select[$categorie->id] = $categorie->nom;
        }
        return view('pages.Article.newArticle',compact('select', 'langs'));
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
        $page->titre = $request->fr_Titre;
        $page->contenu = $request->Français;
        $page->type = 'Article';
        $page->created_by = Auth::user()->id;
        $page->statu = $request->fr_Statu;
        $page->seo_titre = $request->fr_seoTitre;
        $page->seo_description = $request->fr_seoDescription;
        $page->idLang = 1;
        $page->idParent = 0;

        $page->save();

        $id_parent = DB::table('pages')->max('id');

        $categories = DB::table('categories')->where('id', '=', $request->fr)->get(['id']);
        
        foreach($categories as $categorie){
            $id_cat = $categorie->id;

            $page_cate = new PageCate();
            $page_cate->id_page = $id_parent;
            $page_cate->id_cate = $id_cat;

            $page_cate->save();
        }

        $langues = DB::table('langues')->get();

        if($request->en_Titre != "" || $request->sa_Titre != ""){
            foreach($langues as $lang){
                if($lang->reference == 'en'){
                    $page = new Page();
                    $page->titre = $request->en_Titre;
                    $page->contenu = $request->Anglais;
                    $page->type = 'Article';
                    $page->created_by = Auth::user()->id;
                    $page->statu = $request->en_Statu;
                    $page->seo_titre = $request->en_seoTitre;
                    $page->seo_description = $request->en_seoDescription;
                    $page->idLang = $lang->id;
                    $page->idParent = $id_parent;
                    
                    $page->save();
                    
                    $id_page = DB::table('pages')->max('id');
                    foreach($categories as $categorie){
                        $id_cat = $categorie->id;
            
                        $page_cate = new PageCate();
                        $page_cate->id_page = $id_page;
                        $page_cate->id_cate = $id_cat;
            
                        $page_cate->save();
                    }
                }
                if($lang->reference == 'sa'){
                    $page = new Page();
                    $page->titre = $request->sa_Titre;
                    $page->contenu = $request->Arabe;
                    $page->type = 'Article';
                    $page->created_by = Auth::user()->id;
                    $page->statu = $request->sa_Statu;
                    $page->seo_titre = $request->sa_seoTitre;
                    $page->seo_description = $request->sa_seoDescription;
                    $page->idLang = $lang->id;
                    $page->idParent = $id_parent;
                    
                    $page->save();
    
                    $id_page = DB::table('pages')->max('id');
                    foreach($categories as $categorie){
                        $id_cat = $categorie->id;
            
                        $page_cate = new PageCate();
                        $page_cate->id_page = $id_page;
                        $page_cate->id_cate = $id_cat;
            
                        $page_cate->save();
                    }
                }
            }
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
        $langs = DB::table('langues')->get();
        $pages = DB::table('pages')->where('id', '=', $id)->get();
        
        foreach($pages as $page){
            $selectCat[$page->id] = $page->titre;
        }
        return view('pages.Article.editArticle',compact('page', 'selectCat', 'langs'));
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
            'seo_description' => $request->seo_description,
            'idLang' => $request->lang
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
