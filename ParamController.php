<?php

namespace App\Http\Controllers;
use App\Models\Devis;
use App\Models\Contact;
use  PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\File; 



class ParamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view ('dashboard');
    }
    public function message(){
        $contact= Contact::orderBy('id','DESC')->get();
        return view('message',compact('contact'));
    }
    public function devis(){
        $devis= Devis::orderBy('id','DESC')->get();
        return view('devis',compact('devis'));
    }
    public function commande(){
        return view('commande');
    }
    public function membres(){
        $user=User::all();
        return view('utilisateur',compact('user'));
    }
    public function voir_message($id){
        DB::table('contacts')->where('id',$id)->delete();
        return redirect()->route('message')->with('status','Félicitation, les informations pour cette personne ont été bien supprimées'); 
    }
    public function dossier_message($id){
        $contact=Contact::find($id);
        return view('dossier_message',compact('contact'));
    }
    public function suppimer_devis($id){
        $devis=Devis::find($id);
        File::delete($devis->document);
        DB::table('devis')->where('id',$id)->delete();
        return redirect()->route('devis')->with('status','Félicitation, les informations pour ce devis ont été bien supprimé avec succès');
    }
    public function dossier_devis($id){
        $devis=Devis::find($id);
        return view('dossier_devis',compact('devis'));
    }
    public function devis_pdf($id){
        $devis=Devis::find($id);
        $data = [
            'id'=>$devis->id,
            'nom'=>$devis->nom,
            'prenom'=>$devis->prenom,
            'email'=>$devis->email,
            'telephone'=>$devis->telephone,
            'adresse'=>$devis->adresse,
            'ville'=>$devis->ville,
            'code'=>$devis->code_postal,
            'societe'=>$devis->societe,
            'site'=>$devis->site_web,
            'date_p'=>$devis->date_projet,
            'prix'=>$devis->budget,
            'objet'=>$devis->objet_devis,
            'message'=>$devis->message,
            'date'=>$devis->created_at
        ];
          
        $pdf = PDF::loadView('devis_pdf', $data);
        return $pdf->stream();
    }
}
