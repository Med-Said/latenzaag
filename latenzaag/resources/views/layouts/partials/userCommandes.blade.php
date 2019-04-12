
@php
    $countCommandes = 1;
    include(app_path().'/Http/Controllers/helpers.php'); 
@endphp

@foreach ($commandes as $commande)
    <div class="card border-primary mb-3" style="text-align : center;">
        <div class="card-header">{{$countCommandes++ }}. Montant : {{$commande->montant}} DT</div>
        <div class="card-body text-primary">
                @php $articles = getCommandeArticles($commande->commandes_id) @endphp
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Marque</th>
                            <th scope="col">Prix</th>
                          </tr>
                        </thead>
                        <tbody>
                @php $countArticles = 1; @endphp
                @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{$countArticles++}}</th>
                                <td>{{$article->nom}}</td>
                                <td>{{$article->marque}}</td>
                                <td>{{$article->prix}}</td>
                            </tr>
                @endforeach
                @php $countArticles = 1; @endphp
                        </tbody>
                    </table>
        </div>
    </div>
@endforeach

@php $countCommandes = 1; @endphp




          
