{{-- users.id as user_id'
'users.name as user_name'
'users.tel'
'commandes.id as commandes_id'
'commandes.montant as commande_montant --}}

<form id="commandeAfficherForm">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="utilisateur">Utilisateur</label>
        <input readonly name="utilisateur" type="text" class="form-control" id="utilisateur" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="tel">Tel</label>
        <input readonly name="tel" type="text" class="form-control" id="tel" placeholder="">
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="userId">ID (Utilisateur)</label>
        <input readonly name="userId" type="text" class="form-control" id="userId">
      </div>
      <div class="form-group col-md-4">
        <label for="commandeId">ID (Commande)</label>
        <input readonly name="commandeId" type="text" class="form-control" id="commandeId">
      </div>
      <div class="form-group col-md-4">
        <label for="montant">Montant</label>
        <input readonly name="montant" type="text" class="form-control" id="montant">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>



<form id="commandeAjouterForm">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="utilisateur">Utilisateur</label>
        <input   name="utilisateur" type="text" class="form-control" id="utilisateur" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="tel">Tel</label>
        <input   name="tel" type="text" class="form-control" id="tel" placeholder="">
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="userId">ID (Utilisateur)</label>
        <input   name="userId" type="text" class="form-control" id="userId">
      </div>
      <div class="form-group col-md-4">
        <label for="commandeId">ID (Commande)</label>
        <input   name="commandeId" type="text" class="form-control" id="commandeId">
      </div>
      <div class="form-group col-md-4">
        <label for="montant">Montant</label>
        <input   name="montant" type="text" class="form-control" id="montant">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>




<form id="commandeModifierForm">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="utilisateur">Utilisateur</label>
        <input   name="utilisateur" type="text" class="form-control" id="utilisateur" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="tel">Tel</label>
        <input   name="tel" type="text" class="form-control" id="tel" placeholder="">
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="userId">ID (Utilisateur)</label>
        <input   name="userId" type="text" class="form-control" id="userId">
      </div>
      <div class="form-group col-md-4">
        <label for="commandeId">ID (Commande)</label>
        <input   name="commandeId" type="text" class="form-control" id="commandeId">
      </div>
      <div class="form-group col-md-4">
        <label for="montant">Montant</label>
        <input   name="montant" type="text" class="form-control" id="montant">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>




<form id="commandeSupprimerForm">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="utilisateur">Utilisateur</label>
        <input readonly name="utilisateur" type="text" class="form-control" id="utilisateur" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="tel">Tel</label>
        <input readonly name="tel" type="text" class="form-control" id="tel" placeholder="">
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="userId">ID (Utilisateur)</label>
        <input readonly name="userId" type="text" class="form-control" id="userId">
      </div>
      <div class="form-group col-md-4">
        <label for="commandeId">ID (Commande)</label>
        <input readonly name="commandeId" type="text" class="form-control" id="commandeId">
      </div>
      <div class="form-group col-md-4">
        <label for="montant">Montant</label>
        <input readonly name="montant" type="text" class="form-control" id="montant">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>