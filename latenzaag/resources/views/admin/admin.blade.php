<!doctype html>
{{-- <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> --}}
<html class="no-js" lang="en">
{{-- <!--<![endif]--> --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('admin/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->
   

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('admin/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('admin/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('manage')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Gestion de : </h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Utilisateur</a>
                      
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-tv"></i><a href="ui-buttons.html">Afficher</a></li>
                            <li><i class="fa fa-keyboard"></i><a href="ui-badges.html">Modifier</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="ui-tabs.html">Supprimer</a></li>
                            <li><i class="menu-icon fa fa-address-book"></i><a href="ui-social-buttons.html">Contacter</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Articles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="tables-basic.html">Ajouter</a></li>
                            <li><i class="menu-icon fa fa-tv"></i><a href="tables-data.html">Afficher</a></li>
                            <li><i class="fa fa-pen-alt"></i><a href="tables-data.html">Modifier</a></li>
                            <li><i class="fa fa-trash"></i><a href="tables-data.html">Supprimer</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Commandes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-tv"></i><a href="forms-basic.html">Afficher</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="forms-advanced.html">Supprimer</a></li>
                        </ul>
                    </li>

                    
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        {{-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> --}}

                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('img/logo.png')}}" alt="Athena">
                            {{-- {{ config('app.name', 'Athena') }} --}}
                        </a>
    
                    </div>
                </div>


            </div>




            <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('img/maintenance.png')}}" alt="User Avatar">
                        </a>

                        <div id="mode" class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-tv"></i> Selection</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Modification</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Ajout</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Suppression</a>

                            <a class="nav-link" href="{{ route('logout') }}"  
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            ><i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </div>


        </header>


        <div class="content">
            <section class="content" >
                <div class="divForm">
                    <div class="card border-primary mb-3" style="width: 70%; margin-left: 15%;">
                        <div class="card-header">Ajouter un article : <button id="addArticle" class="btn btn-outline-primary">Afficher</button></div> 
                        <div class="card-body text-primary">
                            <h5 class="card-title">Ajouter un article</h5>


                             @include('admin.articleForms') {{-- forms commandeForms userForms --}}
                             @include('admin.userForms') {{--forms commandeForms userForms--}}
                             @include('admin.commandeForms') {{--forms commandeForms userForms--}}


                        </div>
                    </div>
                </div>  

                <div class="divData">
                        <div class="card text-center" style="width: 100%;">
                                <div class="card-header">
                                  <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="{{route('sendData', ['table' => 'users'])}}">Utilisateurs</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{route('sendData', ['table' => 'articles'])}}">Articles</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="{{route('sendData', ['table' => 'commandes'])}}" >Commandes</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  
                                  @isset($users)
                                  <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">NNI</th>
                                            <th scope="col">Tel</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Lieu</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->nni}}</td>
                                            <td>{{$user->tel}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->lieu}}</td>
                                            <td><button class="btn btn-light"><img src="{{asset('img/tap.png')}}" alt=""></button></td>
                                        </tr>
                                        @endforeach
                                    
                                        </tbody>
                                    </table>
                                  @endisset

                                  @isset($articles)
                                  <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Marque</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">Categorie</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($articles as $article)
                                        <tr>
                                            <th scope="row">{{$article->id}}</th>
                                            <td>{{$article->nom}}</td>
                                            <td>{{$article->marque}}</td>
                                            <td>{{$article->prix}}</td>
                                            <td>{{$article->categorie}}</td>
                                            <td><button class="btn btn-light"><img src="{{asset('img/tap.png')}}" alt=""></button></td>
                                        </tr>
                                        @endforeach
                                    
                                        </tbody>
                                </table>
                                  @endisset

                                  @isset($commandes)
                                  <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User_id</th>
                                            <th scope="col">User_name</th>
                                            <th scope="col">Tel</th>
                                            <th scope="col">Command_id</th>
                                            <th scope="col">Montant</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($commandes as $commande)
                                        <tr>
                                            <th scope="row">{{$commande->id}}</th>
                                            <th>{{$commande->user_id}}</th>
                                            <td>{{$commande->user_name}}</td>
                                            <td>{{$commande->tel}}</td>
                                            <td>{{$commande->commandes_id}}</td>
                                            <td>{{$commande->commande_montant}}</td>
                                            <td><button class="btn btn-light"><img src="{{asset('img/tap.png')}}" alt=""></button></td>
                                        </tr>
                                        @endforeach
                                    
                                        </tbody>
                                </table>
                                  @endisset
                                    
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                </div>
            </section>
        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    



    {{-- admin form managers (jquery actions) --}}    

    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/formManager.js')}}"></script>


    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>


    <script src="{{asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/widgets.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
