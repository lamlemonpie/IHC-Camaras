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
<div class="container">
  <div class="row">
    <div class="video col-sm-4">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>
    </div>
    <div class="video col-sm-4">
        <!--<h2>4:3 Responsive Aspect Ratio</h2>-->
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>
    </div>
    <div class="video col-sm-4">
        <!--<h2>4:3 Responsive Aspect Ratio</h2>-->
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>

  </div>
  <br><br>
  <div class="row">
    <div class="video col-sm-4">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>
    </div>
    <div class="video col-sm-4">
        <!--<h2>4:3 Responsive Aspect Ratio</h2>-->
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>
    </div>
    <div class="video col-sm-4">
        <!--<h2>4:3 Responsive Aspect Ratio</h2>-->
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
        </div>

      </div>

    </div>
</div>
@endsection
