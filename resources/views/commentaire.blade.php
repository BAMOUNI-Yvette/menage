@extends('navbar')



{{-- titre --}}
@section('titre')
    Commentaire
@endsection


{{-- debut du contenu --}}
@section('contenu')
    <section class="commen">
        <div class="container-fluid py-5">
            <div class="container">
                {{-- <title>Page de Commentaires</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> --}}
                <form action="{{ URL::to('/traitement_commentaire') }}" method="POST">
                    @csrf
                    <h1 class="tite">Page de commentaires
                    </h1>
                    <div id="comment-section">
                        <h2>Commentaires</h2>
                        <ul id="comment-list">
                            <!-- Les commentaires seront ajoutés ici par JavaScript -->
                        </ul>
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text" id="nom" class="form-control" name="nom" required>
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" id="prenom" class="form-control" name="prenom" required><br>
                        <textarea id="comment-input" name="contenu" placeholder="Écrivez votre commentaire ici"></textarea>
                        <button id="submit-button">Poster le commentaire</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-warning">Modifier</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Testimonial End -->
    </section>
    <h2 class="text-center"><a href="#commentaire">Voir commentaire</a></h2>
    <div id="commentaire">
        <table id="tableau" class="table table-bordered">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Contenu</td>
                    <td>Heure</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                {{-- $commentaires est une variable que j'ai déclaré --}}
                @foreach ($commentaires as $personne)
                    <tr>
                        <th>{{ $personne->nom }}</th>
                        <th>{{ $personne->prenom }}</th>
                        <th>{{ $personne->contenu }}</th>
                        <th>{{ $personne->timestamps }}</th>
                        {{-- <th>{{ $personne->date_heure->format('Y-m-d H:i:s') }}</th> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <section>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/compte') }}" class="bouton-retour" style="text-align: center">Retour</a>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
