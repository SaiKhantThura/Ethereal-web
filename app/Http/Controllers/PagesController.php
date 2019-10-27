<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "This is Title";
        $items =[];
        return view('Pages.index',compact(['title','items']));
    }
}
