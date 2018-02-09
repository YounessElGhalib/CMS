<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\PostCate;
use App\Http\Requests\PageRequest;
use DateTime;
use DB;

class NewPageController extends Controller
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
        $countPage = DB::table('pages')->where('type', '=', 'Page')->count();
        $pages = DB::table('pages')->where('type', '=', 'Page')->get();
        return view('pages.Page',compact('pages', 'countPage'));
    }

    public function page(){
        $langs = DB::table('langues')->get();
        return view('pages.Page.newPage',compact('langs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "message";
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
        $page->type = 'Page';
        $page->url = $request->url;
        $page->created_by = \Illuminate\Support\Facades\Auth::user()->id;
        $page->statu = $request->statu;
        $page->seo_titre = $request->seo_titre;
        $page->seo_description = $request->seo_description;
        $page->idLang = $request->lang;

        $page->save();
        return redirect()->route('pages.index')->with('message',"La page a été ajouté avec succès");
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
    public function edit(Page $page)
    {
        $langs = DB::table('langues')->get();
        return view('pages.Page.editPage',compact('page', 'langs'));
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
            'url' => $request->url,
            'statu' => $request->statu,
            'seo_titre' => $request->seo_titre,
            'seo_description' => $request->seo_description,
            'idLang' => $request->lang
        ]);
        return redirect()->route('pages.index')->with('message',"La page a été mis à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        //Bien joué! L'article a été mis à jour avec succès

        return redirect()->route('pages.index')->with('message',"La page a été supprimé avec succès");
    }
}
