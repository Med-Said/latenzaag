@extends('layouts.app')


@section('style')
    <style>
        .card{
            color: red;
            display: inline;
            margin: 7px;
            float: left;
        }
    </style>
@endsection


@section('content')

<p>Resultats de votre recherche "{{$mot}}"</p>

@foreach ($res as $item)
<div class="card" style="width: 18rem;">
<img src="{{asset('img/' . $item->img . '.jpg')}}" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{{$item->nom}} ({{$item->prix}} DT)</h5>
  <p class="card-text">{{$item->description}}</p>
  <a href="#" class="btn btn-primary">Ajouter <img src="{{asset('img/pannier32.png')}}" alt="pannier32"></a>
</div>
</div> 
@endforeach
@endsection