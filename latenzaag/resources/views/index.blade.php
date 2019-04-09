@extends('layouts.app')


@section('style')
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
    .slider{
        position: relative;
        width: 100%;
        /* margin-left: 1%; */

        border: 1px solid red;
        background: #7fe;

    }
    .slider > div{
        border: 1px solid yellow;
        margin-left: 7%;
    }

    table{
        margin-top: 70px;
    }

    .paginateLinks{
        border: 1px solid black;
        float: right;
        margin-bottom: 30px;
    }

    table{
        text-align: center;
    }

    .footer{
        clear: both;
    }
    </style>
@endsection


@section('content')

@include('layouts.partials.logo')

<div class="row slider">

    {{-- slider 1 --}}
    <div class=".col-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/1_iphone.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5>titre</h5>
                        <p>beaucoup de contenu</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/huawei-pc.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/t-shirt.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>


    {{-- slider 2 --}}
    <div class=".col-4">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/1_iphone.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5>titre</h5>
                        <p>beaucoup de contenu</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/huawei-pc.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/t-shirt.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>


    {{-- slider 3 --}}
    <div class=".col-4">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/1_iphone.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5>titre</h5>
                        <p>beaucoup de contenu</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/huawei-pc.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/t-shirt.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
</div>




{{-- examples de produits (selected from database) --}}

<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prix (DT)</th>
            <th scope="col">Marque</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->nom}}</td>
            <td>{{$article->prix}}</td>
            <td>{{$article->marque}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="paginateLinks"> {{$articles->links()}} </div>




      <section class="footer" >
        @include('layouts.partials.footer')
      </section>
@endsection









@section('js')

@endsection