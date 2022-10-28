@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Utilisateurs</h1>
  </div>
  <div class="card-body">
    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Enregistrer un user</button></a>
   <div class="row">
   <table id="example" class="table table-bordered table-hover " style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Date Inscription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $key=>$value)
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->role}}</td>
                <td>{{$value->created_at}}</td>
                <td>
                <a href=""><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                <a href=""><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
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