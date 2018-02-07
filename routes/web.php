<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/test', function () {
    dump(DB::select('SELECT * FROM articles'));

    dump( DB::table('articles')->get(['nom']) );

    dump( DB::table('articles')->where('nom', '=', 'article 1')->get()) ;

    return DB::table('articles')->get(['nom']);

    return view('pages.test');

});*/

Route::resource('/test','TestController');
/**------------------------------------------------------------------ */

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/backend', function () {
    return view('backend');
});

Route::get('/{name}', 'FrontEndController@index');



Route::prefix('/backend')->group(function () {
    Route::get('/articles/{locale}', array('as'=>'set-locale', 'uses'=>'LanguageController@setLocale'));
    
    Route::resource('/home', 'HomeController');
    
    //route pages
    Route::get('/pages/newPage','NewPageController@page')->name('newPage');
    Route::resource('/pages','NewPageController');

    //route menu
    Route::get('/menu/newMenu','NewMenuController@menu')->name('newMenu');
    Route::resource('/menu','NewMenuController');
    
    //route categories
    Route::get('/categorie/newCategorie','NewCategorieController@categorie')->name('newCategorie');
    Route::resource('/categories','NewCategorieController');
    
    //route articles
    Route::get('/article/newArticle','NewArticleController@article')->name('newArticle');
    Route::resource('/articles','NewArticleController');
    
    //route user
    Route::resource('/user_profile','UserController');

    //route langue
    Route::get('/language/newLangue','LanguageController@langue')->name('newLangue');
    Route::resource('/language','LanguageController');
});