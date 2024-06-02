<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index(){

        $recettes = Recette::All();

        return view('recettes.index', ['recettes' => $recettes]);
    }    
    public function form(){

        return view('recettes.creer');
    }


    public function creer(Request $request){

        $recette_id = $request->input('recette_id');

        if($recette_id == NULL){
            $recette = new Recette() ;
        } else {
            $recette = Recette::find($recette_id);
        }

        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->image_url = $request->image_url;
        $nouveaute = $request->has('nouveaute') ? 1 : 0;
        $recette->save();

        return redirect('/recettes');
    }
}
