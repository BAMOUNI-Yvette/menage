@extends('navbar')



{{-- titre --}}
@section('titre')
    Home
@endsection


{{-- debut du contenu --}}
@section('contenu')
    <section class="py-5">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/7.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div>
                <h1><em>Bienvenu sur notre page d'accueil</em></h1>
            </div>
        </div>
        </div>
    </section>
    <div class="voir">
        <div class="col-6">
            <label class="text-center" for=""><a href="{{ URL::to('/profils') }}">Voir les profils</a> </label>
        </div>
    </div>
    <br><br>
    <section>
        <div class="container">
            <div class=" mb-4" style="max-width: 1000px;">
                <div class="row g-0">

                    <div class="col-md-4">
                        <img src="{{ URL::to('img/9.jpg') }}" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8 ps-5"> <br> <br><br> <br>
                        <div class="body ps-5">

                            <h3>Pour la propriété de votre demeure n'hésitez pas à nous
                                appeler,nous
                                sommes
                                là pour le bien-etre de votre maison. <br>
                                Nous ouevrons pour une maison plus saine et agréable à vivre. <br> Nous sommes une
                                équipe
                                dynamique,sérieuse et sympa qui vise les memes objectifs <br>
                                Avec cleaning service "VOTRE SATISFACTION,NOTRE FIERTE" une équipe toujours
                                pretes
                                et
                                dévouée 
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br>
    <section>
        <div class="circle">
            <div class="">
                <div class="bande-passante">
                    <p class="h0"><em></em></p>
                    <p class="h1" style=""><em></em></p>
                    <p class="h2"><em></em></p>
                    <p class="h3"><em></em></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/profils') }}" class="bouton-suivant" style="text-align: center">Suivant</a>
            </div>
        </div>
    </section>
    <br><br>
@endsection
