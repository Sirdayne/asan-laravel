<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

use App\Step;

use App\ingredient;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

use Session;

class RecipesController extends Controller
{

    public function __construct(){
       $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        //$recipes = Recipe::orderBy('created_at','DESC')->paginate(9);
        //$recipes = Recipe::orderBy('created_at','DESC')->get();

        $recipes = Recipe::all();
        

        return view('recipes.index', compact('recipes'));

    }

    public function show(Recipe $recipe){

        $prev = Recipe::where('id', '<', $recipe->id)->max('id');

        $next = Recipe::where('id', '>', $recipe->id)->min('id');

        return view('recipes.show', compact('recipe'))->with('prev', $prev)->with('next', $next);

        //$randoms = Recipe::InRandomOrder()->take(3)->get();

        //return view('recipes.show', compact('recipe'))->with('prev', $prev)->with('next', $next)->with('randoms', $randoms);

    }

    public function create(){

        return view('recipes.create');

    }
    
    public function store(Request $request){

        $recipe = new Recipe();
        $this->validate($request, [
            'title' => 'required',
            'product' => 'required'
        ]);

        $recipe->title = $request->title;
        $recipe->product = $request->product;

        $recipe->save();

        if ($request->has('steps')){

            foreach ($request->input('steps') as $item) {

                Step::firstOrCreate([
                    'recipe_id' => $recipe->id,
                    'body' => $item
                ]);
            }
        }

        if ($request->has('ingredients')){

            foreach ($request->input('ingredients') as $ingredient) {

                Ingredient::firstOrCreate([
                    'recipe_id' => $recipe->id,
                    'body' => $ingredient
                ]);
            }
        }

		if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            //$name = $timestamp. '-' .$file->getClientOriginalName();
            $name = $timestamp. '-img';
            
            $recipe->image = $name;

            $file->move(public_path().'/images/', $name);
        }

        $recipe->save();
        //return $this->create()->with('success', 'Новость добавлена');

        Session::flash('message', "Рецепт добавлен");
        return redirect('/admin/recipes');
    }

    public function edit(Recipe $recipe){

        return view('recipes.edit', compact('recipe'));

    }

    public function update(Request $request){

        $recipe = Recipe::findOrFail($request->id);

        $this->validate($request, [
            'title' => 'required',
        ]);

        $recipe->title = $request->title;
        $recipe->product = $request->product;

        // update steps
        if ($request->has('steps')){
            $step_num = -1;
            foreach ($request->input('steps') as $step_body) {

                $step_num++;
                $step_id = $request->steps_id[$step_num];

                if( $step_id > -1 ){
                    $step = Step::findOrFail($step_id);
                    $step->body = $step_body;
                    $step->update();
                }
                else{
                    Step::create(['recipe_id' => $recipe->id, 'body' => $step_body]);
                }
            }
        }
        //delete steps
        if ($request->has('steps_delete')){

            $step_nm = -1;
            foreach ($request->input('steps_delete') as $step_delete) {

                $step_nm++;
                $step_id = $request->steps_id[$step_nm];

                if( $step_delete == 0 ){
                    $step = Step::findOrFail($step_id);
                    $step->delete();
                }
            }
        }
        

        //update ingredients
        if ($request->has('ingredients')){
            $ing_num = -1;
            foreach ($request->input('ingredients') as $ingredient_body) {

                $ing_num++;
                $ing_id = $request->ings_id[$ing_num];

                if( $ing_id > -1 ){
                    $ingredient = Ingredient::findOrFail($ing_id);
                    $ingredient->body = $ingredient_body;
                    $ingredient->update();
                }
                else{
                    Ingredient::create(['recipe_id' => $recipe->id, 'body' => $ingredient_body]);
                }
            }
        }
        //delete ingredients
        if ($request->has('ings_delete')){
            $ing_nm = -1;
            foreach ($request->input('ings_delete') as $ing_delete) {

                $ing_nm++;
                $ing_id = $request->ings_id[$ing_nm];

                if( $ing_delete == 0 ){
                    $ingredient = Ingredient::findOrFail($ing_id);
                    $ingredient->delete();
                }
            }
        }
        

		if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            //$name = $timestamp. '-' .$file->getClientOriginalName();
            $name = $timestamp. '-img';
            
            $recipe->image = $name;

            $file->move(public_path().'/images/', $name);
        }

        $recipe->update();
        //return redirect('/posts')->with('success', 'Новость обновлена');

        Session::flash('message', "Рецепт обновлен");
        return redirect('/admin/recipes');

    }

    public function destroy(Recipe $recipe){

        $recipe = Recipe::findOrFail($recipe->id);

        foreach ($recipe->steps as $step) {
            $step->delete();
        }

        foreach ($recipe->ingredients as $ingredient) {
            $ingredient->delete();
        }

        $recipe->delete();

        Session::flash('message', "Рецепт удален");
        return redirect('/admin/recipes');
    }
}
