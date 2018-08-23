@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">

    <div class="card">
      <div class="card-header" > Zona 1 </div>
      <div class="card-body">
        <img width="500px" height="300px"src="{{asset('graph.gif')}}">
      </div>
    </div>

    <div class="card">
      <div class="card-header" > Zona 2 </div>
      <div class="card-body">
        <img width="500px" height="300px"src="{{asset('graph.gif')}}">
      </div>
    </div>


  </div>




</div>

@endsection
