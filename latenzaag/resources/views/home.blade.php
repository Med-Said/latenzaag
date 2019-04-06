@extends('layouts.app')


@section('style')
    <style>
            .card{
        color: blue ;
        text-align: center;
        display: inline-block;
        margin: 7px;
        float: left;
    }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Vos commandes</h5></div>

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
