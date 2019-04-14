<div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Total a payer : {{$totalAPayer}} DT</div>
        <div class="card-body text-primary">
          <h5 class="card-title">Merci pour votre fidelite</h5>
          <div class="row">
              <div class="col">
                  <form action="{{route('lancerCommande')}}" method="POST">
                        {{csrf_field()}}
                    <input type="hidden" name="montant" value="{{$totalAPayer}}">
                  <button type="submit" class="btn btn-primary">Commander</button>
              </form>
              </div>
            
            <div class="col">
                <form action="{{route('annulerCommande')}}">
                    <button type="submit" class="btn btn-danger">Annuler</button>
                </form>
            </div>

            </div>
            <br>
          <p class="card-text">Annuler pour vider le pannier </p>
        </div>
</div>