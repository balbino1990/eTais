@extends('layouts.app')

@section('content')
    <a href="{{ route('seller.index') }}">Fila fali ba index</a>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="background-color:mediumturquoise"><h5>{{ __('Aumenta tais foun ba loja') }}</h5></div>
                            <div class="card-body">
                                <form action="{{ route('seller.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{-- Naran Tais --}}
                                    <div class="form-group">
                                        <label for="">Tais nia naran: </label>
                                        <input type="text" class="form-control" name="name" placeholder="tais nia naran" required="" oninvalid="this.setCustomValidity('Kampu ne labele husik mamuk')">
                                    </div>
    
                                    {{-- Folin tais antes --}}
                                    <div class="form-group">
                                            <label for="">Folin antes: </label>
                                            <input type="text" class="form-control" name="price" placeholder="Folin tais antes" required="" oninvalid="this.setCustomValidity('Kampu ne labele husik mamuk')">
                                    </div>
    
                                    {{-- Folin tais agora --}}
                                    <div class="form-group">
                                            <label for="">Folin agora: </label>
                                            <input type="text" class="form-control" name="list_price" placeholder="Folin tais agora" required="" oninvalid="this.setCustomValidity('Kampu ne labele husik mamuk')">
                                    </div>
    
                                     {{-- Kategoria tais nian --}}
                                     <div class="form-group">
                                            <label for="">Kategoria</label>
                                            <select name="category_id" id="" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>  
                                    </div>
    
                                    {{-- Deskrisaun --}}
                                    <div class="form-group">
                                            <label for="">Deskrisaun: </label>
                                            <textarea type="text" class="form-control" name="desc" placeholder="Deskrisaun" required="" oninvalid="this.setCustomValidity('Kampu ne labele husik mamuk')"></textarea>
                                    </div>
    
                                    {{-- Imagem tais nian --}}
                                    <div class="form-group">
                                            <label for="">Imagem</label>
                                            <input type="text" class="form-control" name="image" placeholder="imagem" required="" oninvalid="this.setCustomValidity('Kampu ne labele husik mamuk')">
                                    </div>
    
                                    {{-- Utilizador nebe maka aumenta tais iha loja --}}
                                    <div class="form-group">
                                            <label for="">Utilizador</label>
                                            <select name="user_id" id="" class="form-control">
                                                @foreach ($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>     
                                    </div>
    
                                    <div class="form-group">
                                        <input type="submit" value="Grava" class="btn btn-primary">
                                    </div>
                                </form>
                             </div>
                        </div>
                    </div>
             </div>
         </div>
@endsection



