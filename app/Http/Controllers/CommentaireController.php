<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index(){

        $commentaires = Commentaire::All();

        return view('commentaires.index', ['commentaires' => $commentaires]);
    }  
}
