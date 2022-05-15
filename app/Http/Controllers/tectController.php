<?php
use app\Objet;
use app\Annonce;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class annonceController extends Controller
{

    public function ajouterAnnonce($id){


        $post = DB::table('objets')->get()->where('id',$id)->first();

        return view('profile.creeAnnonce')->with(['post'=>$post]);

    }
    public function voir_objet($id){
        return view('voir_objet')->with(['id'=>$id]);
    }


    public function afficher_objet($id){
        $post = DB::table('objets')->get()->where('id',$id)->first();


        return view('voir_objet')->with(['post'=>$post]);
    }

    // affichage les annonces Actives
    public function AfficherAnnonce($id){
        $ann = DB::table('objets')
        ->join('annonces', 'objets.id', '=', 'annonces.id_objet')
        ->where([
            ['objets.user_id', '=', $id],
            ['annonces.etat', '=', '1'],
            ])
        ->select('annonces.*','objets.image','objets.nom','objets.description')
        ->latest()->get();

          $data=[
              'ann'=>$ann,
              'success' => 'Add archived succefuly'
          ];
        return view('profile.MesAnnonces')->with($data);


    }

   public function creeAnnonce(){
       return view('profile.creeAnnonce');
   }

   //Archiver l'annonce
   public function ArchiveAnnonceMeth($id,$id2){

    $post3 = DB::table('annonces')->where('id', $id)->update(['etat' => '0']);

    return $othis->AfficherAnnonce($id2)->with([ 'success' => 'Ad archived succefluy']);


   }
   public function ActiveAnnonceMeth($id,$id2){

    $post3 = DB::table('annonces')->where('id', $id)->update(['etat' => '1']);

    return $this->AfficherAnnonce($id2)->with([ 'success' => 'Ad activeted succefluy']);
   }






}
