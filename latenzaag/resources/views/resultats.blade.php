@extends('layouts.app')


@section('style')
    <style>
        .card{
        color: blue;
        display: inline;
        margin: 7px;
        float: left;
        height: 314px;
        overflow-y: scroll;
        }
        h2{
          text-align: center;
        }
        em{
          color: blue;
        }
    </style>
@endsection


@section('content')

<h2>Résultats de votre recherche ' <em>{{$mot}}</em> '</h2>

@foreach ($res as $item)
<div class="card" style="width: 18rem;">
<img src="{{asset('img/' . $item->img)}}" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{{$item->nom}} ({{$item->prix}} DT)</h5>
  <p class="card-text">{{$item->description}}</p>
  <a href="#" class="btn btn-primary">Ajouter <img src="{{asset('img/pannier32.png')}}" alt="pannier32"></a>
</div>
</div> 
@endforeach
@endsection