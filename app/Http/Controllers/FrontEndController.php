<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontEndController extends Controller
{
    public function index($name)
    {
        $rest = substr($name, -5, 5);
        
        if($rest == ".html"){
            $rest = substr($name, 0, -5);
            $takes = DB::table('pages')->where('url', '=', $rest)->get();

            return view('frontEnd.page', compact('takes'));
            // foreach($take as $tak){
            //     $res = $tak->description; 
            //     $articles = DB::table('articles')->where('id_page', '=', $tak->id)->get();
            // }
        }
        
        return view('Error');
    }
}
