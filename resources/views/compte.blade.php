@extends('navbar')

{{-- titre --}}
@section('titre')
    Compte
@endsection


{{-- debut du contenu --}}
@section('contenu')
    <section>
        @if (Session::has('reussite'))
            <h3 class="alert alert-success">
                {{ Session::get('reussite') }}
            </h3>
        @endif

        <form action="{{ URL::to('/client') }}" method="POST" style="text-align: center">
            @csrf
            <div class="justify-content-center" style="margin-top: 5%">
                <h1 class=" bg-danger " style="text-align: center">Formulaire pour les utilisateurs</h1>
                <div class="co">
                    <div class="row">
                        <div class="col-6">
                            <label for="nom" class="form-label"><strong>
                                    <h3>Nom</h3>
                                </strong></label>
                            <input type="text" name="nom"class="form-control" id="nom" placeholder="BAYALA"
                                required>
                        </div>
                        <div class="col-6">
                            <label for="prenom" class="form-label"><strong>
                                    <h3>Prenom</h3>
                                </strong></label>
                            <input type="text" name="prenom"class="form-control" id="prenom" placeholder="Christine"
                                required style="background-color: beige">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="email" class="form-label"><strong>
                                    <h3>E-mail</h3>
                                </strong></label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="cleaningservice@gmail.com" required>
                        </div>
                        <div class="col-6">
                            <label for="telephone" class="form"><strong>
                                    <h3>Telephone</h3>
                                </strong></label>
                            <input type="telephone" name="telephone"class="form-control" id="telephone"
                                placeholder="76843674" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="quartier" class="form-label"><strong>
                                    <h3>Quartier</h3>
                                </strong></label>
                            {{-- <input type="texte" name="texte" class="form-control" id="texte" placeholder="ex: karpala"
                            required> --}}
                            <select class="form-select" aria-label="Default select example" name="quartier" required>
                                <option selected>Choisir</option>
                                <option value="Ouaga/karpala">karpala</option>
                                <option value="Zone 1">Zone 1</option>
                                <option value="Saaba">Saaba</option>
                                <option value="Wayalghin">Wayalghin</option>
                                <option value="Saaba">Saaba</option>
                                <option value="Kalgondé">Kalgondé</option>
                                <option value="Benogo">Benogo</option>
                                <option value="Bargo">Bargo</option>
                                <option value="Saaba">Nioko 1</option>
                                <option value="Saaba">Nioko 2</option>
                                <option value="Saaba">Somgandé</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="besoins" class="form-label"><strong>
                                    <h3>Vos bésoins</h3>
                                </strong></label>
                            {{-- <input type="texte" name="texte" class="form-control" id="texte" placeholder="ex: cuisine"> --}}
                            <select style="height: auto;" class="form-select" aria-label="Default select example"
                                name="besoins" required>
                                <option selected>Besoin d'une femme de ménage</option>
                                <option value="lessive">lessive</option>
                                <option value="Nettoyage de maison en générale">Nettoyage de maison en générale
                                </option>
                                <option value="Nettoyage de cuisine">Nettoyage de cuisine</option>
                                <option value="Quelqu'un pour garder vos bébés">Quelqu'un pour garder vos bébés
                                </option>
                                <option value="Ménage occasionnel ou régulier">Ménage occasionnel ou régulier
                                </option>
                                <option value="Ménage profonde ou leger">Ménage profonde ou leger
                                </option>
                                <option value="Entretien ménager résidentiel">Entretien ménager résidentiel
                                </option>
                                <option value="Besoin d'une ménagère pour une courte durée">Besoin d'une ménagère pour une
                                    courte durée
                                </option>
                                <option value="Sur une longue durée">Sur une longue durée
                                </option>
                            </select>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="col-4">
                        <button class="btn btn-primary" style="text-align: center">Submit</button>
                    </div>
                </div>
                <br><br>
            </div>
            </div>
        </form>
    </section>
    <br><br>
    <section>
        <div class="container">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d554.7900826047725!2d-1.4983211862296615!3d12.355740481266707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebf544437550b%3A0xbbd1c5f17460168b!2s1200%20logement!5e0!3m2!1sfr!2sbf!4v1694798839825!5m2!1sfr!2sbf"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <br><br>
    <section>
        <div class="det">
            <h2>N'hésitez pas à nous contacter</h2>
            <h4><span class="rouge">Voici notre email:</span>
                <h5><span class="blue">cleaningservice@gmail.com</span></h5>
            </h4>
            <h4>Vous pourriez nous joindre sur ces numéros en cas de bésoin: <h5>+225 02 00 27 68/ +226 57 52 78 88</h5>
            </h4>
            <h4>Sise à Ouagadougou : <h5>Quartier ( 1200 logements)</h5>
            </h4>
        </div>
        <h1><span class="blu">Une équipe</span><span class="green">Toujours prete</span></h1>
    </section>
    <br>
    <section>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/inscription') }}" class="bouton-retour">Retour</a>
            </div>
            <div class="col-3">
                <a href="{{ URL::to('/commentaire') }}" class="bouton-suivant" style="margin-left: 800px">Suivant</a>
            </div>
        </div>

    </section>
@endsection
