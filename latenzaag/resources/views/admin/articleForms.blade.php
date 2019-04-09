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




    
    <form action="{{route('articles_stocks.store')}}" id="articleAjouterForm" method="post" enctype="multipart/form-data" >
        @csrf
            <div class="card mb-3" style="max-width: 100%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                            <label for="img">Image.jpg</label>
                        <img src="{{asset('img/1_iphone.jpg')}}" class="card-img" alt="...">
                        <input required type="file" name="img" id="img">
                    </div>
                    
                    
                    <div class="col-md-8">
                    <div class="card-body">
        
                        <div class="row">
                            <div class="col-9">
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="categorie">Categorie</label>
                                                <input required  name="categorie" type="text"  class="form-control" id="categorie">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="marque">Marque</label>
                                                <input required  name="marque" type="text" class="form-control" id="marque">
                                            </div>
                                    </div>
                    
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nom">Nom</label>
                                                <input required  name="nom" type="text" class="form-control" id="nom">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="prix">Prix</label>
                                                <input required  name="prix" type="text" class="form-control" id="prix">
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