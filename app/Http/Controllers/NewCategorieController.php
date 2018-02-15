<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Http\Requests\CategorieRequest;
use DateTime;
use DB;

class NewCategorieController extends Controller
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
        $countCategorie = Categorie::count();
        $categories2 = DB::table('categories')->get();
        $categories = DB::table('categories')->where('idParent', '=', 0)->get();
        $langs = DB::table('langues')->get();

        for($i=0;$i<count($categories);$i++){
            $array[$i] = ['id' => '0','nom' => 'Article', 'url' => 'url', 'languages' => ['fr' =>'false', 'en' =>'false', 'sa' =>'false']];
        }

        $i=0;
        foreach($categories as $page){
            $array[$i]['id'] = $page->id;
            $array[$i]['nom'] = $page->nom;
            $array[$i]['url'] = $page->url;
            $array[$i]['languages']['fr'] = 'true';
            foreach($categories2 as $pageL){
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
        return view('pages.categories', compact('categories', 'countCategorie', 'array', 'langs'));
    }

    public function categorie(){
        $langs = DB::table('langues')->get();
        return view('pages.Categorie.newCategorie', compact('langs'));
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
            if($request->input('nom.'.$con) != null){
                $categorie = new Categorie();

                $categorie->nom = $request->input('nom.'.$con);
                $categorie->url = $request->input('url.'.$con);
                $categorie->seo_titre = $request->input('seo_titre.'.$con);
                $categorie->seo_description = $request->input('seo_description.'.$con);
                $categorie->description = $request->input('description.'.$con);
                $categorie->idLang = $lang->id;
                if($lang->reference == "fr"){
                    $categorie->idParent = 0;
                }else{
                    $id_parent = DB::table('categories')->where('idLang', '=', 1)->max('id');
                    $categorie->idParent = $id_parent;
                }
                $categorie->save();
                
            }
        }
        return redirect()->route('categories.index')->with('message',"Le catégorie a été ajouté avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $langs = DB::table('langues')->get();

        foreach($langs as $lang){
            $array[$lang->id-1] = [
                'id' => '0',
                'nom' => '', 
                'url' => '', 
                'SEO_titre' => '',
                'SEO_Description' => '',
                'description' => '',
                'lang' => $lang->reference
                ];
        }

        $cateParent = DB::table('categories')->where('id', '=', $id)->get();
        foreach($cateParent as $cate){
            $array[0]['id'] = $cate->id;
            $array[0]['nom'] = $cate->nom;
            $array[0]['url'] = $cate->url;
            $array[0]['SEO_titre'] = $cate->seo_titre;
            $array[0]['SEO_Description'] = $cate->seo_description;
            $array[0]['description'] = $cate->description;
            $array[0]['lang'] = 'fr';
            $parentId = $cate->id;
        }
        $cateChilds = DB::table('categories')->where('idParent', '=', $parentId)->get();

        $i=1;
        //$pages = DB::table('pages')->where('idParent', '=', $id)->get();
        foreach($cateChilds as $cate){
            $array[$cate->idLang-1]['id'] = $cate->id;
            $array[$cate->idLang-1]['nom'] = $cate->nom;
            $array[$cate->idLang-1]['url'] = $cate->url;
            $array[$cate->idLang-1]['SEO_titre'] = $cate->seo_titre;
            $array[$cate->idLang-1]['SEO_Description'] = $cate->seo_description;
            $array[$cate->idLang-1]['description'] = $cate->description;
            foreach($langs as $lang){
                if($lang->id == $cate->idLang){
                    $array[$cate->idLang-1]['lang'] = $lang->reference;
                }
            }
            $parentId = $cate->id;
            $i++;
        }
        return view('pages.Categorie.editCategorie',compact('array', 'langs', 'id'));
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
                DB::table('categories')->where('id', $request->input('id.'.$con))->update([
                    'nom' => $request->input('nom.'.$con),
                    'url' => $request->input('url.'.$con),
                    'description' => $request->input('description.'.$con),
                    'seo_titre' => $request->input('seo_titre.'.$con),
                    'seo_description' => $request->input('seo_description.'.$con)
                ]);
            }else if($request->input('id.'.$con) == 0){
                if($request->input('nom.'.$con) != ''){
                    $categorie = new Categorie();

                    $categorie->nom = $request->input('nom.'.$con);
                    $categorie->url = $request->input('url.'.$con);
                    $categorie->seo_titre = $request->input('seo_titre.'.$con);
                    $categorie->seo_description = $request->input('seo_description.'.$con);
                    $categorie->description = $request->input('description.'.$con);
                    $categorie->idLang = $lang->id;

                    $categorie->idParent = $id;
                    
                    $categorie->save();
                }
            }
            $con++;
        }
        return redirect()->route('categories.index')->with('message',"Le catégorie a été mis à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        DB::table('categories')->where('idParent', '=', $id)->delete();
        return redirect()->route('categories.index')->with('message',"Le catégorie a été supprimé avec succès");
    }
}
