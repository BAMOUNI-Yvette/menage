@extends('navbar')



{{-- titre --}}
@section('titre')
    Services
@endsection


{{-- debut du contenu --}}
@section('contenu')
    <section class="py-5">

        <div class="container-fluid">
            <div>
                <h1 style="text-align: center">Services</h1>
            </div>
            <div>
                <img src="{{ URL::to('/') }}/img/j.jpg" alt="" width="100%" height="auto"
                    style="border-radius: 10px">
            </div>
            <div>
                <h2><em>Comment nous travaillons</em></h2>
            </div>
            <div style="text-align: center">
                <div style="color: blue">
                    <h4>Bésoin d'une femme de ménage?</h4>
                    <h4>Tout près de chez vous?</h4>
                </div>
                <div style="color: red">
                    <h3>Avec Cleaning service , vous rétournez avec le sourire aux lèvres</h3>
                </div>
            </div>
        </div>
    </section>
    <div class=" d-flex">
        <section class="do">
            <div class="row g-0">
                <div class="col-6">
                    <div class="" style="">
                        <img src="{{ URL::to('/') }}/img/l.jpg" class="card-img-top" alt="..." width="400px"
                            height="auto">
                        <div class="card-body">
                            <p><strong>Pour le nettoyage de vos cuisine</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row g-0">
                <div class="col-6">
                    <div class="" style="">
                        <img src="{{ URL::to('/') }}/img/jard.jpg" class="card-img-top" alt="..." width="400px"
                            height="auto">
                        <div class="card-body">
                            <p><strong>Pour le nettoyage de vos jardins</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row g-0">
                <div class="col-6">
                    <div class="" style="">
                        <img src="{{ URL::to('/') }}/img/l.jpg" class="card-img-top" alt="..." width="400px"
                            height="auto">
                        <div class="card-body">
                            <p><strong>Pour le nettoyage de vos bureaux</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row g-0">
                <div class="col-6">
                    <div class="" style="">
                        <img src="{{ URL::to('/') }}/img/7.jpg" class="card-img-top" alt="..."width="400px"
                            height="auto">
                        <div class="card-body">
                            <p><strong>Pour le nettoyage de vos vitres</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </section>
        <section class="">
            <div class="col-6">
                <video src="{{ URL::to('/') }}/img/affiche.mp4" width="500px" height="auto"></video>
            </div>
        </section>
    </div>
    <section style="text-align: center">
        <div>
            <h1 style="color: blue">Nous sommes une équipe à multiple taches</h1>
        </div>
        <ul style="">
            <li>
                <h2>Ménage occasionnel ou régulier</h2>
            </li>
            <li>
                <h2>Ménage profonde ou léger</h2>
            </li>
            <li>
                <h2>Entretien ménager résidentiel</h2>
            </li>
            <li>
                <h2>En votre absence ou non</h2>
            </li>
            <li>
                <h2>Ménage en temps partiel</h2>
            </li>
        </ul>
        <h3>N'hésitez pas à nous appeler</h3>
    </section>
    <section class="py-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <iframe width="900px" height="315"
                        src="https://www.youtube.com/embed/tpA-l_J2vkg?si=xjwcUFWY2OUWf4Qd" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="carousel-item ">
                    <iframe width="900" height="315"
                        src="https://www.youtube.com/embed/PK_88onqw_M?si=rFqyqmzHX-8XFB1N" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <section>
        <br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/profils') }}" class="bouton-retour">Retour</a>
            </div>
            <div class="col-3">
                <a href="{{ URL::to('/inscription') }}" class="bouton-suivant" style="margin-left: 800px">Suivant</a>
            </div>
        </div>
        <br>
    </section>
@endsection
