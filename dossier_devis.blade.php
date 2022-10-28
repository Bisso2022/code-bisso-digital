@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Devis-Contenu</h1>
  </div>
  <div class="card-body">
   <div class="row">
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
       @if(isset($devis->id))
       <h5>informations sur le contenu du devis</h5><hr>
        <div class="col-md-5" >
            <p>Informations personnelles du client</p>
            <ul>
                <li>Nom : {{$devis->nom}}</li>
                <li>Prénom : {{$devis->prenom}}</li>
                <li>Téléphone : {{$devis->telephone}}</li>
                <li>Emai : {{$devis->email}}</li>
                <li>Ville : {{$devis->ville}}</li>
                <li>Code Postal : {{$devis->code_postal}}</li>
                <li>Adresse : {{$devis->adresse}}</li>
            </ul>
            <hr>
            <p>Motifis de demande de devis</p>
            <ul>
                <li>Sujet de devis : {{$devis->objet_devis}}</li>
                <li>Message : {{$devis->message}}</li>
                <hr>
                <li>Date contact : {{$devis->created_at}}</li>
            </ul>
            <hr>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <p>Le canal de connaissance de Bisso Digital</p>
            <ul>
                <li>J'ai connu Bisso Digital grâce  : {{$devis->info}}</li>
            </ul>
            <hr>
            <p>Information sur la societé</p>
            <ul>
                <li>Nom : {{$devis->societe}}</li>
                <li>Site web : <a target="_bank" href="{{$devis->site_web}}">site web</a></li>
            </ul>
            <hr>
            <p>Information sur le projet</p>
            <ul>
                <li>Date projet : {{$devis->date_projet}}</li>
                <li>Budget projet : {{$devis->budget}}</li>
                <li>Objet du devis : {{$devis->objet}}</li>
            </ul>
            <p>Document envoyer lors de la demande</p>
            <ul>
                <li>Support Pdf* : <a  target="_bank" href="{{ asset($devis->document)}}">Voir le support</a></li>
            </ul>
        </div>
       @else
       <h5>Pas de resultat possible</h5>
       @endif
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        } );
</script>
@endsection