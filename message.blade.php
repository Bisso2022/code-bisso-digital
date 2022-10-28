@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Messages</h1>
  </div>
  <div class="card-body">
   <div class="row">
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
   <table id="example" class="table table-bordered table-hover " style="width:100%">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Téléphone</td>
                <td>Email</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
        @foreach($contact as $keys=>$value)
            <tr>
                <td>{{$value->nom}}</td>
                <td>{{$value->prenom}}</td>
                <td>{{$value->telephone}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->created_at}}</td>
                <td class="text-center"><a href="/details-message/{{$value->id}} "><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                <a href="/contenu-message/{{$value->id}}"><button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                </td>
            </tr>
            @endforeach
    </table>
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