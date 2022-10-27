<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Devis;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
  
    public function email(){
        Mail::to('mokokoardeche@gmail.com')->send(new ContactMail());
    }
    public function index()
    {
        return view('accueil');
    }
    public function apropos(){
        return view('apropos');
    }
   public function services(){
       return view('services');
   }
    public function contacts(){
        return view('contacts');
    }
    public function blogs(){
        return view('blogs');
    }
    public function politique(){
        return view('politique');
    }
    public function save_contact(Request $request){
        $validated=$request->validate([
            'nom'=>'required|max:255|regex:/^[a-zA-ZÑñéèêôûîâç\s]+$/',
            'prenom'=>'required|max:255|regex:/^[a-zA-ZÑñéèêôûîâç\s]+$/',
            'sujet'=>'required',
            'telephone'=>'required|regex:/^[-0-9\+]+$/|max:15',
            'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|max:25',
            'message'=>'required'
        ],[
            'nom.required'=>'Le nom est obligatoire',
            'nom.regex'=>'Le nom ne doit que contenir des lèttres aphabétiques',
            'prénom.regex'=>'Le prénom ne doit que contenir des lèttres aphabétiques',
            'prenom.required'=>'Le prénom est obligatoire',
            'sujet.required'=>'Le sujet est obligatoire',
            'telephone.required'=>'Le téléphone est obligatoire',
            'telephone.regex'=>'Le numéro du téléphone portable ne doit que contenir des chiffres',
            'email.required'=>'L\' adresse email est obligatoire',
            'email.unique'=>'Vous nous avez déjà contacté avec cette adresse email, on vous contact bientôt',
            'email.regex'=>'Le format email n\' est pas valide',
            'message.required'=>'Le message est obligatoire'
        ]);
        $contact=new Contact();
        $contact->nom=$request->nom;
        $contact->prenom=$request->prenom;
        $contact->sujet=$request->sujet;
        $contact->telephone=$request->telephone;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('contacts')->with('status','Félicitation, votre message à bien été envoyé');
    }
    public function save_devis(Request $request){
       
        $validated=$request->validate([
            'info'=>'required',
            'nom'=>'required|max:255|regex:/^[a-zA-ZÑñéèêôûîâç\s]+$/|max:25',
            'prenom'=>'required|max:255|regex:/^[a-zA-ZÑñéèêôûîâç\s]+$/|max:25',
            'email'=>'required|unique:devis|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|max:25',
            'telephone'=>'required|regex:/^[-0-9\+]+$/|max:15',
            'adresse'=>'required|max:255',
            'ville'=>'required|max:255',
            'code'=>'required|numeric|min:5',
            'societe'=>'required|max:255',
            'site'=>'required',
            'date'=>'required',
            'budget'=>'required|numeric',
            'objet'=>'required|max:255',
            'fichier'=>'required|mimes:PDF,pdf|max:20000',
            'message'=>'required'
        ],[
            'info.required'=>'Vous devez préciser là ou vous nous avez connu obligatpoirement',
            'nom.required'=>'Le nom est obligatoire',
            'nom.regex'=>'Le non ne doit que comporter des lèttres',
            'nom.max'=>'Le nom ne doit pas dépasser 25 caractères',
            'prenom.max'=>'Le prénom ne doit pas dépasser 25 caractères',
            'prenom.required'=>'Le prénom est obligatoire',
            'prenom.regex'=>'Le prénom ne doit que comporter des lèttres',
            'email.required'=>'L\' adresse email est obligatoire',
            'email.regex'=>'L\' adresse email n\' est pas valide',
            'email.max'=>'La taille de votre email ne doit pas dépasser les 25 caractères',
            'telephone.required'=>'Le numéro du téléphone portable est obligatoire',
            'telephone.regex'=>'Le numéro du téléphone portable ne pas que contenir des chiffres',
            'telephone.max'=>'Le numéro du téléphone portable ne doit pas dépasser les 14 ou 15 chiffres',
            'adresse.required'=>'L\' adresse est à mentionnée obligatoirement',
            'ville.required'=>'Le nom de la ville est obligatoire',
            'code.required'=>'Le code postal de la ville est obligatoire',
            'code.numeric'=>'Le code postal ne doit que contenir des chiffres',
            'code.max'=>'Le code postal ne doit pas dépasser les 5 chiffres',
            'societe.required'=>'Le nom de la societé est obligatoire',
            'site.required'=>'Le site web est obligatpoire',
            'site.regex'=>'Le format de votre adresse du site web n\'est pas bonne',
            'date.required'=>'La date du debut de projet est obligatoire',
            'budget.required'=>'Le budget pour le projet est obligatoire',
            'objet.required'=>'L\' objet du devis est obligatoire',
            'fichier.required'=>'Le fichier pour le devis est à inserer obligatoirement',
            'fichier.mimes'=>'Seul les formt PDF, pdf sont autorisés',
            'fichier.max'=>'La taille du fichier ne doit pas dépasser les 20 Mo',
            'message.required'=>'La description du projet est obligatoire'
        ]);
        $fichier=Storage::disk('public')->put('document_devis',$request->fichier);
        $devis=new Devis();
        $devis->info=$request->info;
        $devis->nom=$request->nom;
        $devis->prenom=$request->prenom;
        $devis->email=$request->email;
        $devis->telephone=$request->telephone;
        $devis->adresse=$request->adresse;
        $devis->ville=$request->ville;
        $devis->code_postal=$request->code;
        $devis->societe=$request->societe;
        $devis->site_web=$request->site;
        $devis->date_projet=$request->date;
        $devis->budget=$request->budget;
        $devis->objet_devis=$request->objet;
        $devis->document="storage/".$fichier;
        $devis->message=$request->message;
        $devis->save();
        return redirect()->route('blogs')->with("status",'Félicitation, la demande de votre devis à bien été envoyée');
    }
}
