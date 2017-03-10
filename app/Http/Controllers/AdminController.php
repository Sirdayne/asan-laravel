<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

class AdminController extends Controller
{   
    //public function __construct(){
    //    $this->middleware('auth');
    //}

    public function index(){
        return view('admin.index');
    }

    public function recipes(){
        $recipes = Recipe::all();
    
        return view('admin.recipes', compact('recipes'));
    }
}
