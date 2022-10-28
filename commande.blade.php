@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Commandes</h1>
  </div>
  <div class="card-body">
   <div class="row">
    <h5>En attente de l'évolution de l'agence pour le traitement</h5>
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