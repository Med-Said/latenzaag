<table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Marque</th>
            <th scope="col">Prix</th>
            <th scope="col">Categorie</th>
            <th scope="col">Image</th>
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
            <td><img src="{{asset('img/' . $article->img . '.jpg')}}"  alt="..."></td>
        </tr>
        @endforeach
    
        </tbody>
</table>