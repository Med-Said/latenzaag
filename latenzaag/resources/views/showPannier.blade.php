@extends('layouts.app')


@php
    $pannierArticles = session('pannierArticles');
    $pannierArticlesIds = session('pannierArticlesIds');
    $totalAPayer = 0;    
    // $pannierArticlesIds represent an assoc array cotains id and article as string (word seperated by --)
    // $pannierArray represent an objet as string (word seperaded by --)
    // $articles is an array of articles attributes 

@endphp

@section('content')


<div class="row">
    <div class="col-8">
       @isset($pannierArticlesIds)
           @foreach ($pannierArticlesIds as $pannierArray)
            @php $articleAttributes = preg_split ("/\--/", $pannierArray); $totalAPayer += $articleAttributes[2] @endphp

        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{asset('img/' . $articleAttributes[5] . '.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$articleAttributes[1]}} - {{$articleAttributes[3]}}</h5>
                    <p class="card-text">{{$articleAttributes[4]}}.</p>
                    <p class="card-text"><small class="text-muted">Prix : {{$articleAttributes[2]}}</small></p>
                </div>
                </div>
            </div>
        </div>
        @endforeach
       @endisset
        
    </div>

    <div class="col-4">
        @include('layouts.partials.acheter', ['totalAPayer' => $totalAPayer])

    </div>
</div>






    
@endsection