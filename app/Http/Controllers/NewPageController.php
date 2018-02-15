<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\PostCate;
use App\Http\Requests\PageRequest;
use DateTime;
use DB;
use Illuminate\Support\Facades\Auth;

class NewPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $countPage = DB::table('pages')->where('type', '=', 'Page')->where('idParent', '=', 0)->count();
        $pages2 = DB::table('pages')->where('type', '=', 'Page')->get();
        $pages = DB::table('pages')->where('type', '=', 'Page')->where('idParent', '=', 0)->get();
        $langs = DB::table('langues')->get();

        for($i=0;$i<count($pages);$i++){
            $array[$i] = ['id' => '0','titre' => 'Article', 'url' => 'url', 'languages' => ['fr' =>'false', 'en' =>'false', 'sa' =>'false']];
        }

        $i=0;
        foreach($pages as $page){
            $array[$i]['id'] = $page->id;
            $array[$i]['titre'] = $page->titre;
            $array[$i]['url'] = $page->url;
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

        return view('pages.Page',compact('array', 'countPage', 'langs'));
    }

    public function page(){
        $langs = DB::table('langues')->get();
        return view('pages.Page.newPage',compact('langs'));
    }

    public function create()
    {
        return "message";
    }

    
    public function store(Request $request)
    {
        $langs = DB::table('langues')->get();

        foreach($langs as $lang){
            $con = $lang->id - 1;
            if($request->input('titre.'.$con) != null){
                $page = new Page();
                $page->titre = $request->input('titre.'.$con);
                $page->contenu = $request->input('content.'.$con);
                $page->url = $request->input('url.'.$con);
                $page->type = 'Page';
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
            }
            
        }
        return redirect()->route('pages.index')->with('message',"La page a été ajouté avec succès");
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $langs = DB::table('langues')->get();

        foreach($langs as $lang){
            $array[$lang->id-1] = [
                'id' => '0',
                'titre' => '', 
                'url' => '', 
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
            $array[0]['url'] = $page->url;
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
            $array[$page->idLang-1]['url'] = $page->url;
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
        return view('pages.Page.editPage',compact('array', 'langs', 'id'));
    }

   
    public function update(Request $request, $id)
    {
        $langs = DB::table('langues')->get();
        $con = 0;
        foreach($langs as $lang){
            if($request->input('id.'.$con) != 0){
                DB::table('pages')->where('id', $request->input('id.'.$con))->update([
                    'titre' => $request->input('titre.'.$con),
                    'url' => $request->input('url.'.$con),
                    'contenu' => $request->input('content.'.$con),
                    'statu' => $request->input('statu.'.$con),
                    'seo_titre' => $request->input('seo_titre.'.$con),
                    'seo_description' => $request->input('seo_description.'.$con)
                ]);
            }else if($request->input('id.'.$con) == 0){
                if($request->input('titre.'.$con) != ''){
                    $page = new Page();
                    $page->titre = $request->input('titre.'.$con);
                    $page->url = $request->input('url.'.$con);
                    $page->contenu = $request->input('content.'.$con);
                    $page->type = 'Page';
                    $page->created_by = Auth::user()->id;
                    $page->statu = $request->input('statu.'.$con);
                    $page->seo_titre = $request->input('seo_titre.'.$con);
                    $page->seo_description = $request->input('seo_description.'.$con);
                    $page->idLang = $lang->id;

                    $page->idParent = $id;
                    
                    $page->save();
                }
            }
            $con++;
        }
        return redirect()->route('pages.index')->with('message',"La page a été mis à jour avec succès");
    }

    
    public function destroy($id)
    {
        DB::table('pages')->where('id', '=', $id)->delete();
        DB::table('pages')->where('idParent', '=', $id)->delete();

        return redirect()->route('pages.index')->with('message',"La page a été supprimé avec succès");
    }
}
