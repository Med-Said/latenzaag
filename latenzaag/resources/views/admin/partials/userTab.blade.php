<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">NNI</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Lieu</th>
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
    </tr>
    @endforeach

    </tbody>
</table>