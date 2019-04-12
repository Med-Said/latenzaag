{{-- menu de selection de la categorie des articles --}}
<div class="categorie">
    <form class="form-inline" action="{{url('categorie')}}">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Categorie</label>
        <select name="categorie" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Chosissez une categorie</option>
            @foreach ($categories as $categorie) {{-- categories represent returned data for DB --}}
            <option >{{$categorie->categorie}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary my-1">Lancer</button>
    </form>
</div>