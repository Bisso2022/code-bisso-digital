@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Message-Contenu</h1>
  </div>
  <div class="card-body">
   <div class="row">
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
       @if(isset($contact->id))
       <h5>informations sur le contenu du message</h5><hr>
        <div class="col-md-1"></div>
        <div class="col-md-5 " >
            <ul>
                <li>Nom : {{$contact->nom}}</li>
                <li>Prénom : {{$contact->prenom}}</li>
                <li>Téléphone : {{$contact->telephone}}</li>
                <li>Email : {{$contact->email}}</li>
                <li>Date : {{$contact->created_at}}</li>
            </ul>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <ul>
                <li>Sujet : {{$contact->sujet}}</li><hr>
                <li>Message : {{$contact->message}}</li><hr>
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