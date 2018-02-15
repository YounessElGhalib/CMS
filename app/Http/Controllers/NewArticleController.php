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
use Input;


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

        $pages2 = DB::table('pages')->where('type', '=', 'Article')->get();
        $pages = DB::table('pages')->where('type', '=', 'Article')->where('idParent', '=', 0)->get();
        $countArticles = DB::table('pages')->where('type', '=', 'Article')->where('idParent', '=', 0)->count();
        $cats = DB::table('categories')->get();
        $pageCates = DB::table('page_cates')->get();
        $langs = DB::table('langues')->get();

        for($i=0;$i<count($pages);$i++){
            $array[$i] = ['id' => '0','titre' => 'Article', 'categorie' => 'cat', 'languages' => ['fr' =>'false', 'en' =>'false', 'sa' =>'false']];
        }
        $i=0;
        foreach($pages as $page){
            foreach($pageCates as $pageCate){
                if($page->id == $pageCate->id_page){
                    foreach ($cats as $cat){
                        if($cat->id == $pageCate->id_cate){
                            $array[$i]['categorie'] = $cat->nom;
                        }
                    }
                }
            }
            $i++;
        }
        $i=0;
        foreach($pages as $page){
            $array[$i]['id'] = $page->id;
            $array[$i]['titre'] = $page->titre;
            $array[$i]['languages']['fr'] = 'true';
            foreach($pages2 as $pageL){
                if($page->id == $pageL->idParent){
                    foreach($langs as $lang){
                        if($lang->id == $pageL->idLang){
                            $array[$i]['languages'][$lang->reference] = 'true';
                        }
                    }
                }
            }
            $i++;
        }

        return view('pages.articles',compact('countArticles', 'array', 'langs', 'cats'));
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
        $langs = DB::table('langues')->get();

        foreach($langs as $lang){
            $con = $lang->id - 1;
            if($request->input('titre.'.$con) != null){
                $page = new Page();
                $page->titre = $request->input('titre.'.$con);
                $page->contenu = $request->input('content.'.$con);
                $page->type = 'Article';
                $page->created_by = Auth::user()->id;
                $page->statu = $request->input('statu.'.$con);
                $page->seo_titre = $request->input('seo_titre.'.$con);
                $page->seo_description = $request->input('seo_description.'.$con);
                $page->idLang = $lang->id;
                if($lang->reference == "fr"){
                    $page->idParent = 0;
                }else{
                    $id_parent = DB::table('pages')->where('idLang', '=', 1)->max('id');
                    $page->idParent = $id_parent;
                }
    
                $page->save();
    
                $categories = DB::table('categories')->where('id', '=', $request->input('categorie.'.$con))->get(['id']);
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

        foreach($langs as $lang){
            $array[$lang->id-1] = [
                'id' => '0',
                'titre' => '', 
                'Statu' => '',
                'SEO_titre' => '',
                'SEO_Description' => '',
                'contenu' => '',
                'lang' => $lang->reference
                ];
        }

        $pageParent = DB::table('pages')->where('id', '=', $id)->get();
        foreach($pageParent as $page){
            $array[0]['id'] = $page->id;
            $array[0]['titre'] = $page->titre;
            $array[0]['Statu'] = $page->statu;
            $array[0]['SEO_titre'] = $page->seo_titre;
            $array[0]['SEO_Description'] = $page->seo_description;
            $array[0]['contenu'] = $page->contenu;
            $array[0]['lang'] = 'fr';
            $parentId = $page->id;
        }
        $pageChilds = DB::table('pages')->where('idParent', '=', $parentId)->get();

        $i=1;
        $pages = DB::table('pages')->where('idParent', '=', $id)->get();
        foreach($pages as $page){
            $array[$page->idLang-1]['id'] = $page->id;
            $array[$page->idLang-1]['titre'] = $page->titre;
            $array[$page->idLang-1]['Statu'] = $page->statu;
            $array[$page->idLang-1]['SEO_titre'] = $page->seo_titre;
            $array[$page->idLang-1]['SEO_Description'] = $page->seo_description;
            $array[$page->idLang-1]['contenu'] = $page->contenu;
            foreach($langs as $lang){
                if($lang->id == $page->idLang){
                    $array[$page->idLang-1]['lang'] = $lang->reference;
                }
            }
            $parentId = $page->id;
            $i++;
        }

        // dd($array);
        return view('pages.Article.editArticle',compact('id', 'selectCat', 'langs', 'pageEn', 'myLangSelected', 'array'));
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
        $langs = DB::table('langues')->get();
        $con = 0;
        foreach($langs as $lang){
            if($request->input('id.'.$con) != 0){
                DB::table('pages')->where('id', $request->input('id.'.$con))->update([
                    'titre' => $request->input('titre.'.$con),
                    'contenu' => $request->input('content.'.$con),
                    'statu' => $request->input('statu.'.$con),
                    'seo_titre' => $request->input('seo_titre.'.$con),
                    'seo_description' => $request->input('seo_description.'.$con)
                ]);
            }else if($request->input('id.'.$con) == 0){
                if($request->input('titre.'.$con) != ''){
                    $page = new Page();
                    $page->titre = $request->input('titre.'.$con);
                    $page->contenu = $request->input('content.'.$con);
                    $page->type = 'Article';
                    $page->created_by = Auth::user()->id;
                    $page->statu = $request->input('statu.'.$con);
                    $page->seo_titre = $request->input('seo_titre.'.$con);
                    $page->seo_description = $request->input('seo_description.'.$con);
                    $page->idLang = $lang->id;

                    $page->idParent = $id;
                    
                    $page->save();

                    $categories = DB::table('page_cates')->where('id_page', '=', $id)->get(['id_cate']);
                    $id_page = DB::table('pages')->max('id');
                    foreach($categories as $categorie){
                        $id_cat = $categorie->id_cate;
        
                        $page_cate = new PageCate();
                        $page_cate->id_page = $id_page;
                        $page_cate->id_cate = $id_cat;
        
                        $page_cate->save();
                    }
                }
            }
            $con++;
        }

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
        $deletepages = DB::table('pages')->where('idParent', '=', $id)->get();
        foreach($deletepages as $deletepage){
            DB::table('page_cates')->where('id_page', '=', $deletepage->id)->delete();
        }
        DB::table('pages')->where('id', '=', $id)->delete();
        DB::table('pages')->where('idParent', '=', $id)->delete();
        DB::table('page_cates')->where('id_page', '=', $id)->delete();
        
        return redirect()->route('articles.index')->with('message',"L'article a été supprimé avec succès");
    }
}
