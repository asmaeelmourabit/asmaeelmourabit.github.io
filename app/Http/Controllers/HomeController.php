<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(){

        $premium = DB::table('annonces')
        ->join('objets', 'annonces.id_objet', '=', 'objets.id')
        ->where('annonces.premium', '<>', '0')
        ->select('annonces.*','objets.image','objets.nom','objets.description')
        ->latest()->simplePaginate(3);

        $annonces= DB::table('annonces')
        ->join('objets', 'annonces.id_objet', '=', 'objets.id')
        ->select('annonces.*','objets.image','objets.nom','objets.description')
        ->latest()->simplePaginate(9);

        $data = [
            'premium'=>$premium,
            'annonces'   => $annonces,
        ];


        return view('Welcome')->with($data);
    }


    ////Affichage des annonces premium


}

