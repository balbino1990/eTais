@extends('layouts.app')

@section('content')
    <a href="{{ route('seller.index') }}">Fila fali ba index</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:mediumturquoise"><h5>{{ __('Edit tais iha loja') }}</h5></div>
                        <div class="card-body">
                            {!! Form::open(['action' => ['SellerController@update', $product->id], 'method' => 'PUT']) !!}
                                {{ csrf_field() }}
                                {{-- Naran Tais --}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tais nia naran') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}" required autofocus>
                                    </div>
                                </div>

                                  {{-- Folin antes --}}
                                  <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Folin antes') }}</label>
                                        <div class="col-md-6">
                                            <input id="price" type="text" class="form-control" name="price" value="{{$product->price}}" required autofocus>
                                        </div>
                                    </div>

                                    {{-- Folin agora --}}
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Folin agora') }}</label>
                                        <div class="col-md-6">
                                            <input id="list_price" type="text" class="form-control" name="list_price" value="{{$product->list_price}}" required autofocus>
                                        </div>
                                    </div>

                                     {{-- Deskrisaun tais nian --}}
                                     <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deskrisaun') }}</label>
                                        <div class="col-md-6">
                                            <textarea id="desc" type="text" class="form-control" name="desc" required autofocus>
                                                {{$product->desc}}
                                            </textarea>
                                        </div>
                                    </div>

                                     {{-- Imagem tais nian --}}
                                     <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Folin agora') }}</label>
                                            <div class="col-md-6">
                                                <input id="image" type="text" class="form-control" name=image value="{{$product->image}}" required autofocus>
                                            </div>
                                    </div>

                                    {{-- Kategoria tais nian --}}
                                    <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kategoria') }}</label>
                                            <div class="col-md-6">
                                            <select name="category_id" id="" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>  
                                            </div>
                                    </div>
                                {{-- {{Form::hidden('_method', 'PUT')}} --}}
                                <div class="form-group">
                                    <a class="btn btn-danger bt-md" href="{{ route('seller.index') }}">Kansela</a>
                                    <input type="submit" value="Edita" class="btn btn-primary btn-md">
                                </div>
                                
                                
                               
                            {!! Form::close() !!}
                         </div>
                    </div>
                </div>
         </div>
     </div>
@endsection