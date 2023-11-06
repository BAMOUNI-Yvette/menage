<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Femme;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function home(){
        return view('home');
    }

    public function profils(){
        return view('profils');
    }
    public function services(){
        return view('services');
    }
    public function inscription(){
        return view('inscription');
    }
    public function compte(){
        return view('compte');
    }
    public function commentaire(){
        $commentaires=commentaire::all();
        // return view('commentaire',compact('commentaires'));
        return view('commentaire',['commentaires'=> $commentaires]);
    }
    // public function contact(){
    //     return view('contact');
    // }
    public function afficherProfils(){
        return view('afficherProfils');
    }
    public function retour(){
        return view('retour');
    }
    public function suivant(){
        return view('suivant');
    }
    public function connexionclient(){
        return view('connexion');
    }
    public function formulaire(){
        return view('formulaire');
    }
    public function fichier(){
        return view('fichier');
    }
    public function client(Request $request){
        $client=new Client();
        $client-> nom=$request->input('nom');
        $client-> prenom=$request ->input('prenom');
        $client-> email=$request->input('email');
        $client-> telephone=$request->input('telephone');
        $client-> quartier=$request->input('quartier');
        $client-> besoins=$request->input('besoins');
        $client->save();
        session()->flash('reussite','votre donnee ont été enrégistré avec reussite');
        return redirect('/commentaire');
        

    }

    public function femme(Request $request){
        $femme=new Femme();
        $femme-> nom=$request->input('nom');
        $femme-> prenom=$request->input('prenom');
        $femme-> telephone=$request->input('telephone');
        $femme-> competence=$request->input('competence');
        $femme->save();
        session()->flash('reussite','votre donnee ont été enrégistré avec reussite');
        return redirect('/inscription');
        
    }
    // public function traitement_commentaire(Request $request){
    //      $traitement_commentaire= new Traitement_commentaire();
    //      $traitement_commentaire-> nom=$request->input('nom');
    //      $traitement_commentaire-> prenom=$request->input('prenom');
    //      $traitement_commentaire-> contenu=$request->input('contenu');
    //      $traitement_commentaire->save();

    // }

    // public function traitement_commentaire(Request $request)
    // {
    //     $request->validate([
    //         'nom' => 'required',
    //         'prenom' => 'required',
    //         'contenu' => 'required',
    //     ]);
    
    //     // Créez un nouveau commentaire dans la base de données
    //     $commentaire = new Commentaire();
    //     $commentaire->nom = $request->nom;
    //     $commentaire->prenom = $request->prenom;
    //     $commentaire->contenu = $request->contenu;
    //     $commentaire->date_heure = Carbon::now(); // Utilisation de Carbon pour la date et l'heure

    //     $commentaire->save();
    
    //     return redirect('/commentaire');

    // }

public function traitement_commentaire(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'contenu' => 'required',
    ]);

    // Créez un nouveau commentaire dans la base de données
    $commentaire = new Commentaire();
    $commentaire->nom = $request->nom;
    $commentaire->prenom = $request->prenom;
    $commentaire->contenu = $request->contenu;
    
    // if ($request->has('date_heure')) {
    //     $commentaire->date_heure = $request->date_heure;
    // } else {
    //     $commentaire->date_heure = Carbon::now(); // Utilisation de Carbon pour la date et l'heure
    // }
    
    $commentaire->save();

    return redirect('/commentaire');
}

    

    

}
