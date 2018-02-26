<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Menu;
use DB;

class NewMenuController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $menus = Menu::all();
        $countMenu = DB::table('menus')->count();
        return view('pages.menu', compact('menus', 'countMenu'));
    }

    public function menu(){
        $menus = DB::table('menus')->where('idLang','=',1)->get();
        $cats = DB::table('categories')->where('idLang','=',1)->get();
        $pages = DB::table('pages')->where('type','=','Page')->get();
        $langs = DB::table('langues')->get();
        return view('pages.Menu.newMenu', compact('langs', 'cats', 'pages', 'menus'));
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
            if($request->input('p_titre.'.$con) != null){
                $menu = new Menu();
                $menu->titre = $request->input('p_titre.'.$con);
                $menu->type = $request->input('p_type.'.$con);
                $menu->url = $request->input('p_url.'.$con);
                $menu->description = $request->input('p_description.'.$con);
                $menu->idLang = $lang->id;
                if($lang->reference == "fr"){
                    $menu->idParent = 0;
                }else{
                    $id_parent = DB::table('menus')->where('idLang', '=', 1)->max('id');
                    $menu->idParent = $id_parent;
                }
                $menu->save();
            }else if($request->input('c_titre.'.$con) != null){
                $menu = new Menu();
                $menu->titre = $request->input('c_titre.'.$con);
                $menu->type = $request->input('c_type.'.$con);
                $menu->url = $request->input('c_url.'.$con);
                $menu->description = $request->input('c_description.'.$con);
                $menu->idLang = $lang->id;
                if($lang->reference == "fr"){
                    $menu->idParent = 0;
                }else{
                    $id_parent = DB::table('menus')->where('idLang', '=', 1)->max('id');
                    $menu->idParent = $id_parent;
                }
                //$array[$con]=$menu;
                $menu->save();
            }
        }

        //dd($array);
        return redirect()->route('newMenu')->with('message','The Menu has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('pages.menu',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('pages.Menu.editMenu',compact('menu'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());
        return redirect()->route('menu.index')->with('message','The Menu has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('message','The Menu has been deleted successfully');
    }
}
