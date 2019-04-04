@php
    if(isset($articlesParGategories)){
        
        $articles = $articlesParGategories;
    }
@endphp

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

@include('layouts.partials.categorieOption')

@foreach ($articles as $article)
    <div class="card" style="width: 18rem;">
    <img src="{{asset('img/' . $article->img . '.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->nom}} ({{$article->prix}} DT)</h5>
      <p class="card-text">{{$article->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> 
@endforeach

 
@endsection


