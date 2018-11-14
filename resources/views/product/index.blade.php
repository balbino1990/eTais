@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!--Parte karuk-->
    <div class="navbar-nav mr-auto col-md-2">Parte karuk</div>

    <!--parte klaran-->
    <div class="navbar-nav mx-auto col-md-8">
      <div class="row">
          <?php foreach ($product as $p): ?>
            <div class="col-md-3 text-center">
              <h4 class="text-center">{{$p->name}}</h4>
              <img src="{{$p->image}}" alt="Tais" width="180px;" height="250px;"><br>
              <p class="list-price text-danger">Folin antes: <s>${{$p->price}}</s></p>
              <p class="price">Folin agora: ${{$p->list_price}}</p>
              <a class="btn btn-success" href="details/{{$p->id}}">Detalhe</a>
              <br><br>
            </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!--Parte los-->
    <div class="navbar-nav ml-auto col-md-1">Parte los</div>
  </div>

  
@endsection