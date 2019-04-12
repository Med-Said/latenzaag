@extends('layouts.app')


@section('style')
    <style>
           
    .card{
        color: blue;
        display: inline;
        margin: 7px;
        width: 100%;
        /* overflow-y: scroll; */
        }

        h2{
            text-align: center;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('content')
<div class="container main">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2>Vos commandes</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('layouts.partials.userCommandes')
                </div>  
            </div>
        </div>
    </div>
</div>


@endsection
