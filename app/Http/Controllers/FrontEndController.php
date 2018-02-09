<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontEndController extends Controller
{
    public function index($lang, $name)
    {
        $rest = substr($name, -5, 5);
        
        if($rest == ".html"){
            $rest = substr($name, 0, -5);
            $takes = DB::table('pages')->where('url', '=', $rest)->get();
            $langs = DB::table('langues')->where('reference', '=', $lang)->get();
            if( $langs == null){
                return view('Error');
            }else{
                foreach($langs as $lang){
                    foreach($takes as $take){
                        if($take->idLang == $lang->id){
                            return view('frontEnd.page', compact('takes'));
                        }
                    }
                }
            }
        }
        
        return view('Error');
    }
}
