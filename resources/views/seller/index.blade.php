@extends('layouts.app')

@section('content')
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
               <th>Naran produtu nian</th>
               <th>Folin antes</th>
               <th>Folin agora</th>
               <th>Imazem</th>
               <th>Kategoria</th>

            </tr>
        </thead>
        <tbody>
           
                @foreach ($products as $product)
                <tr>
                    <td scope="col">{{$product->name}}</td>
                    <td scope="col">${{$product->price}}</td>
                    <td scope="col">${{$product->list_price}}</td>
                    <td scope="col"><img src="{{$product->image}}" width="80px;" height="100px;"></td>
                    <td scope="col">{{$product->category_id}}</td>
                </tr>
                @endforeach
            
        </tbody>
    </table>    
@endsection