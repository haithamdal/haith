<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home(){
return view('SiteOne.home');
}
function services(){
    return view('SiteOne.services');
    }
    function portfolio(){
        return view('SiteOne.portfolio');
        }
        function contact(){
            return view('SiteOne.contact');
            }
    function about()  {
        return view('SiteOne.about');

    }



function postcontact(Request $request ){
    dd($request->all());
    }

}
