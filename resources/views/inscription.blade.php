@extends('navbar')



{{-- titre --}}
@section('titre')
    Contact
@endsection


{{-- debut du contenu --}}
@section('contenu')
    <section class="py-5">
        <div class="ins">
            @if (Session::has('reussite'))
                <h3 class="alert alert-success">
                    {{ Session::get('reussite') }}
                </h3>
            @endif

            <br>
            <div class="container">
                <h2>Formulaire pour le régistre des femmes</h2>
                <form action="{{ URL::to('/femme') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="nom" class="form-label"><strong>Nom:</strong></label>
                                <input type="nom" id="nom" name="nom" class="form-control" required>
                            </div>
                            <br>
                            <div class="col-6">
                                <label for="prenom" class="form-label"><strong>Prénom :</strong></label>
                                <input type="prenom" id="prenom" name="prenom" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="telephone" class="label"><strong>Téléphone :</strong></label>
                                <input type="telephone" id="telephone" name="telephone" class="form-control"required>
                            </div>
                            <br>
                            <div class="col-6">
                                <label for="competence" class="form-label"><strong>Compétence :</strong></label>
                                <input type="competence" id="competence" name="competence" class="form-control"required>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="form-group" style="text-align: center">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>

            </div>
        </div>
    </section>
    <section>
        <br><br>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/services') }}" class="bouton-retour">Retour</a>
            </div>
            <div class="col-3">
                <a href="{{ URL::to('/compte') }}" class="bouton-suivant" style="margin-left: 800px">Suivant</a>
            </div>
        </div>
    </section>
    <br><br>
@endsection
