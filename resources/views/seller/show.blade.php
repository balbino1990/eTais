@extends('layouts.app')

@section('content')
<a href="{{ route('seller.index') }}">Fila fali ba index</a>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">  
            <!--parte klaran-->
            <div class="mx-auto col-md-2">
                <img src="{{asset($product->image)}}" alt="Tais" width="200px"; height="300px">
            </div>
            
            <!--Parte los-->
            <div class="ml-auto col-md-7">
                <br><br>
                <h4>{{$product->name}}</h4><hr><br>
                <p style="font-size:18px;">{{$product->desc}}</p><br>
                <p class="list-price text-danger"><b>Folin antes: </b><s>${{$product->price}}</s></p>
                <p><b>Folin agora: </b>${{$product->list_price}}</p>
            </div>
         </div>
         <hr>
         <div class="ml-auto col-md-6">
                <a href="{{ route('seller.index') }}">Fila fali ba Lista tais nian</a> | 
             <a class="btn btn-success" href="#" class="btn btn-success">Tau ba Karinu</a>
         </div>
    </div>
@endsection