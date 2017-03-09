<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function index(){
        return view('pages.index', ['seo' => $this->seo('index')] );
    }

    public function about(){
        return view('pages.about', ['seo' => $this->seo('about')] );
    }
    
    public function partners(){
        return view('pages.partners', ['seo' => $this->seo('partners')] );
    }

    public function contacts(){
        return view('pages.contacts', ['seo' => $this->seo('contacts')] );
    }

    public function catalog(){
        return view('pages.catalog', ['seo' => $this->seo('catalog')] );
    }

    public function seo($page)
    {
        $seo['title'] = trans("seo.{$page}_title");
        $seo['description'] = trans("seo.{$page}_description");
        //$seo['keywords'] = trans("seo.{$page}_keywords");

        return $seo;
    }
}
