@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:mediumturquoise"><h5>{{ __('Aumenta tais foun ba loja') }}</h5></div>
                        <div class="card-body">
                            <form class="" action="{{ route('seller.store') }}" method="POST">
                                {{ csrf_field() }}
                                {{-- Naran Tais --}}
                                <div class="form-group">
                                    <label for="">Tais nia naran: </label>
                                    <input type="text" class="form-control" name="name" placeholder="tais nia naran">
                                </div>

                                {{-- Folin tais antes --}}
                                <div class="form-group">
                                        <label for="">Folin antes: </label>
                                        <input type="text" class="form-control" name="price" placeholder="Folin tais antes">
                                </div>

                                {{-- Folin tais agora --}}
                                <div class="form-group">
                                        <label for="">Folin agora: </label>
                                        <input type="text" class="form-control" name="list_price" placeholder="Folin tais agora">
                                </div>

                                {{-- Deskrisaun --}}
                                <div class="form-group">
                                        <label for="">Deskrisaun: </label>
                                        <textarea type="text" class="form-control" name="desc" placeholder="Deskrisaun"></textarea>
                                </div>

                                {{-- Imagem tais nian --}}
                                <div class="form-group">
                                        <label for="">Imagem</label>
                                        <input type="text" class="form-control" name="image" placeholder="imagem">
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