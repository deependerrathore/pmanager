@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
  <div class="card text-center  border-dark">
    <div class="card-header">
      Companies
    </div>
    <ul class="list-group list-group-flush">
      @foreach($companies as $company)
      <li class="list-group-item">{{$company->name}}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection