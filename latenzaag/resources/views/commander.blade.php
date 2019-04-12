@php
    if(isset($articlesParGategories)){
        
        $articles = $articlesParGategories;
    }
@endphp

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
    .categorie{
      width: 30%;
      margin: 0 auto;
    }
    .article{
      width: 95%;
      margin-left: 4%;
    }
</style>

@endsection

@section('content')

@include('layouts.partials.categorieOption')

<div class="article">
  
@foreach ($articles as $article)
    <div class="card" style="width: 18rem;">
    <img src="{{asset('img/' . $article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->nom}} ({{$article->prix}} DT)</h5>
      <p class="card-text">{{$article->description}}</p>
      <form class="form-inline" action="{{route('pannier')}}" method="POST">
        {{csrf_field()}}
      <input type="hidden" name="article" id="article" value="{{$article->id . '--' . $article->nom . '--' . $article->prix . '--' . $article->marque . '--' . $article->description . '--' . $article->img}}">
    <button type="submit" class="btn btn-primary my-1">Ajouter <img src="{{asset('img/pannier32.png')}}" alt="pannier32"> </button>
    </form>
    </div>
  </div> 
@endforeach
</div>


@endsection