<form action="" id="articleAfficherForm">
 
        <div class="card mb-3" style="max-width: 100%">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('img/1_iphone.jpg')}}" class="card-img" alt="...">
                </div>
                
                
                <div class="col-md-8">
                <div class="card-body">
    
                    <div class="row">
                        <div class="col-9">
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="categorie">Categorie</label>
                                            <input readonly name="categorie" type="text"  class="form-control" id="categorie">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="marque">Marque</label>
                                            <input readonly name="marque" type="text" class="form-control" id="marque">
                                        </div>
                                </div>
                
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nom">Nom</label>
                                            <input readonly name="nom" type="text" class="form-control" id="nom">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="prix">Prix</label>
                                            <input readonly name="prix" type="text" class="form-control" id="prix">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="id">Id</label>
                                            <input readonly name="id" type="text" class="form-control" id="id">
                                        </div>
                                </div>
                        </div>
                        <div class="col-3">
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="message">Description</label>
                                            <textarea readonly name="message" rows="7" class="form-control" id="message" placeholder="" required></textarea>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</form>




    
    <form name="articleAjouterForm" action="{{route('articles_stocks.store')}}" id="articleAjouterForm" method="post" enctype="multipart/form-data" >
        @csrf
            <div class="card mb-3" style="max-width: 100%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                            <label for="img">Image</label>
                        <img src="{{asset('img/1_iphone.jpg')}}" class="card-img" alt="...">
                        <input type="file" name="img" id="img" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" value="{{ old('img') }}" required autofocus>
                        @if ($errors->has('img'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('img') }}</strong>
                        </span>
                    @endif
                    </div>
                    
                    
                    <div class="col-md-8">
                    <div class="card-body">
        
                        <div class="row">
                            <div class="col-9">
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="categorie">Categorie</label>
                                                <input id="categorie"  name="categorie" type="text"  class="form-control{{ $errors->has('categorie') ? ' is-invalid' : '' }}" value="{{ old('categorie') }}" required autofocus>
                                                
                                                @if ($errors->has('categorie'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('categorie') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="marque">Marque</label>
                                                <input  id="marque"  name="marque" type="text" class="form-control{{ $errors->has('marque') ? ' is-invalid' : '' }}" value="{{ old('marque') }}" required autofocus >
                                                
                                                @if ($errors->has('marque'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('marque') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                    </div>
                    
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nom">Nom</label>
                                                <input id="nom"  name="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value="{{ old('nom') }}" required autofocus>
                                                @if ($errors->has('nom'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nom') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="prix">Prix</label>
                                                <input name="prix" type="number" step="0.01"  class="form-control{{ $errors->has('prix') ? ' is-invalid' : '' }}" id="prix" value="{{ old('prix') }}" required autofocus>
                                               
                                                @if ($errors->has('prix'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('prix') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-2">
                                                {{-- <label for="id">Id</label>
                                                <input required name="id" type="text" class="form-control" id="id"> --}}
                                            </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <button class="btn btn-primary" type="submit">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>

                                    
                            </div>
                            <div class="col-3">
                                    <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="message">Description</label>
                                                <textarea  name="description" rows="7" class="form-control" id="message" placeholder="" required></textarea>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        




        <form action="" id="articleModifierForm">
 
                <div class="card mb-3" style="max-width: 100%">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset('img/1_iphone.jpg')}}" class="card-img" alt="...">
                        </div>
                        
                        
                        <div class="col-md-8">
                        <div class="card-body">
            
                            <div class="row">
                                <div class="col-9">
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="categorie">Categorie</label>
                                                    <input  name="categorie" type="text"  class="form-control" id="categorie">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="marque">Marque</label>
                                                    <input  name="marque" type="text" class="form-control" id="marque">
                                                </div>
                                        </div>
                        
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nom">Nom</label>
                                                    <input  name="nom" type="text" class="form-control" id="nom">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="prix">Prix</label>
                                                    <input  name="prix" type="text" class="form-control" id="prix">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="id">Id</label>
                                                    <input  name="id" type="text" class="form-control" id="id">
                                                </div>
                                        </div>
                                </div>
                                <div class="col-3">
                                        <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="message">Description</label>
                                                    <textarea  name="message" rows="7" class="form-control" id="message" placeholder="" required></textarea>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
            
    



            <form action="" id="articleSupprimerForm">
 
                    <div class="card mb-3" style="max-width: 100%">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/1_iphone.jpg')}}" class="card-img" alt="...">
                            </div>
                            
                            
                            <div class="col-md-8">
                            <div class="card-body">
                
                                <div class="row">
                                    <div class="col-9">
                                            <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="categorie">Categorie</label>
                                                        <input readonly name="categorie" type="text"  class="form-control" id="categorie">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="marque">Marque</label>
                                                        <input readonly name="marque" type="text" class="form-control" id="marque">
                                                    </div>
                                            </div>
                            
                                            <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nom">Nom</label>
                                                        <input readonly name="nom" type="text" class="form-control" id="nom">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="prix">Prix</label>
                                                        <input readonly name="prix" type="text" class="form-control" id="prix">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="id">Id</label>
                                                        <input readonly name="id" type="text" class="form-control" id="id">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-3">
                                            <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="message">Description</label>
                                                        <textarea readonly name="message" rows="7" class="form-control" id="message" placeholder="" required></textarea>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>