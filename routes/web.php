<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
return 'home';
});*/

/*
Route::get('/news/{id?}', function($id=null){
    $news=[1 , 2 , 3 , 6 , 8 , 9];

    if($id){
        echo 'new is :'.$id;

    }else{
        echo 'all news:' . '<br>';
        foreach($news as $new){
            echo $new . '<br>';

           }
    }

  //  echo 'user in:' .$id;
    });

    */

    //  site 1/ home , about us , contact us
    route::prefix('site1')->name('site1.')->controller(SiteOneController::class)->group(function(){

        Route::get('/home','home')->name('home');
        Route::get('/services','services')->name('services');
        Route::get('/portfolio','portfolio')->name('portfolio');
        Route::get('/contact','contact')->name('contact');
        Route::get('/about','about')->name('about');
        Route::get('/contact','contact')->name('contact');
        route::post('/contact' , 'postcontact')->name('postcontact');
    });
