<table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">User_id</th>
            <th scope="col">User_name</th>
            <th scope="col">Tel</th>
            <th scope="col">Command_id</th>
            <th scope="col">Montant</th>
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
        </tr>
        @endforeach
    
        </tbody>
</table>