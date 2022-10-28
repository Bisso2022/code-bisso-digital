@extends('home')
@section('content')
<div class="card">
  <div class="card-header">
   <h1>Dashboard</h1>
  </div>
  <div class="card-body">
   <div class="row justify-content-center">
      <div class="col-md-2">
        <span id="cercle">
          <i class="fa fa-commenting-o fs-5 me-2" aria-hidden="true"></i> <p>Total: 178</p>
        </span>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <i class="fa fa-balance-scale fs-5 me-2" aria-hidden="true"></i> <p>Total: 36</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <i class="fa fa-shopping-cart fs-5 me-2" aria-hidden="true"></i> <p>Total: 80</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <i class="fa fa-users fs-5 me-2" aria-hidden="true"></i> <p>Total: 235</p>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>
@endsection