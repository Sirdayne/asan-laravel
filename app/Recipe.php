<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function steps(){
        return $this->hasMany(Step::class);
    }
    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
