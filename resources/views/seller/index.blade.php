@extends('layouts.app')

@section('content')
    @include('error.message')   {{--A mensagem que vai informar para o utilizador se for sucesso ou não--}}
    <h5>Index Fa'an nain</h5><br>
    <a href="seller/create">Aumenta tan tais foun</a><br><br>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
               <th>Naran produtu nian</th>
               <th>Folin antes</th>
               <th>Folin agora</th>
               <th>Deskrisaun tais nian</th>
               <th>Imazem</th>
               <th>Kategoria</th>
               <th>Asaun fa'an nain nian</th>

            </tr>
        </thead>
        <tbody>
           
                @foreach ($products as $product)
                <tr>
                    <td scope="col">{{$product->name}}</td>
                    <td scope="col">${{$product->price}}</td>
                    <td scope="col">${{$product->list_price}}</td>
                    <td scope="col">{{$product->desc}}</td>
                    <td scope="col"><img src="{{asset($product->image)}}" width="80px;" height="100px;"></td>
                    <td scope="col">{{$product->category_id}}</td>
                    <td>
                        <a class="btn btn-warning" href="seller/{{$product->id}}/edit">Edita</a> |
                        <a class="btn btn-danger" href="#">Apaga</a> |
                        <a class="btn btn-primary"  href="seller/{{$product->id}}">Detalhe</a>
                    </td>
                </tr>
                @endforeach
            
        </tbody>
    </table>    
@endsection