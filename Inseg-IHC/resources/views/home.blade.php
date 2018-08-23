@extends('layouts.app')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="container" id="videos">
  <div class="row">
    <div class="  col-sm-4" id="camara">
        <img width="300px" height="250px"src="{{asset('cam1.gif')}}">
    </div>
    <div class=" col-sm-4" id="camara2">
        <img width="300px" height="250px"src="{{asset('cam4.gif')}}">
    </div>
    <div class=" col-sm-4">
        <img width="300px" height="250px"src="{{asset('cam7.gif')}}">
    </div>

  </div>

  <br><br>
  <div class="row">
    <!-- <div class="video col-sm-4">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>
    </div> -->
    <div class=" col-sm-4">
        <img width="300px" height="250px"src="{{asset('cam2.gif')}}">
    </div>
    <div class=" col-sm-4">
        <img width="300px" height="250px"src="{{asset('cam5.gif')}}">
    </div>
    <div class=" col-sm-4">
        <img width="300px" height="250px"src="{{asset('cam6.gif')}}">
    </div>


    </div>

  </div>


<script>

  var count = 0
  function borde(){
    if (count == 0){
      $("#camara").css("border", 'solid 10px  #D7443F');
      count = 1
    }
    else
    {
      $("#camara").css("border", 'solid 10px  #485058');
      count = 0
    }

  }


  var count2 = 0
  function borde2(){
    if (count2 == 0){
      $("#camara2").css("border", 'solid 10px  #D7443F');
      count2 = 1
    }
    else
    {
      $("#camara2").css("border", 'solid 10px  #485058');
      count2 = 0
    }

  }


  var t = setInterval(borde,123);
  var t = setInterval(borde2,137);

  var camara = $( "#camara" );

// while (true) {
//
//   $("#camara").css("border", 'solid 5px  #FFFFFF');
// }


</script>
@endsection
