<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use URL;
use App;
use App\Langue;
use DB;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setLocale($locale='en'){
        if(!in_array($locale, ['fr', 'en'])){
            $locale = 'en';
        }
        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = DB::table('langues')->get();

        return view('pages.settingLangue',compact('langs'));
    }

    public function langue()
    {
        return view('pages.Langue.newLangue');
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
        $lang = new Langue();
        $lang->lang = $request->lang;
        $lang->reference = $request->reference;

        $lang->save();
        return redirect()->route('language.index')->with('message',"La langue a été ajouté avec succès");
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
        //$lang = DB::table('langues')->where('id', '=', $id)->get();
        $lang = Langue::find($id);
        return view('pages.Langue.editLangue',compact('lang'));
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
        $lang = Langue::find($id);
        $lang->update($request->all());
        return redirect()->route('language.index')->with('message',"La langue a été modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lang = Langue::find($id);
        $lang->delete();
        return redirect()->route('language.index')->with('message',"La langue a été supprimé avec succès");
    }
}
