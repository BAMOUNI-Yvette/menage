@extends('navbar')
{{-- titre --}}
@section('titre')
    Profils
@endsection
{{-- debut du contenu --}}
@section('contenu')
    <section class="py-5">
        <div class="container">
            <div>
                <h1 style="text-align: center">Profils</h1>
            </div>
            {{-- <button type="connexion" class="btn btn-primary"><a href="{{ URL::to('/connexion') }}"></a>Connexion</button> --}}
            <div class="row">
                <img src="{{ URL::to('/') }}/img/2.jpg" alt="" style="width: 100%" height="auto">
            </div>
            <div class="titre">
                <h1>Bienvenu à vous sur la page profils</h1>
            </div>
        </div>
    </section>

    <section>

        <div class="row row-cols-1 row-cols-md-3 g-6">
            <div class="col">
                <div class="card transparent-card">
                    <img src="{{ URL::to('/') }}/img/10.jpg" style="max-width: 750px; " class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">1</h5>
                        <p class="card-text "style="max-width: 300px;">Moi, c'est Maria. Je suis une ménagère et je suis passionnée par mon travail</p>
                        <p>Je vie à karpala , j'ai un moyen de déplacement</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card transparent-card">
                    <img src="{{ URL::to('/') }}/img/7.jpg" style="max-width: 650px;" class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">2</h5>
                        <p class="card-text" style="max-width: 300px;">Moi c'est Marie,</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card transparent-card" >
                    <img src="{{ URL::to('/') }}/img/4.jpg" style="max-width: 650px;" class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">3</h5>
                        <p class="card-text" style="max-width: 300px;">Je me nomme Elisabeth, je suis une menagère dévouée.</p>
                        <p>Je vie à Somgandé, j'ai un moyen de déplacement.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card transparent-card">
                    <img src="{{ URL::to('/') }}/img/l.jpg"  style="max-width: 650px;" class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">4</h5>
                        <p class="card-text" style="max-width: 300px;">Je me nomme BARGO Susi,</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card transparent-card">
                    <img src="{{ URL::to('/') }}/img/foie.jpg"  style="max-width: 650px;" class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">5</h5>
                        <p class="card-text" style="max-width: 300px;">Je m'appelle OUEDRAGO Rihanna,</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card transparent-card">
                    <img src="{{ URL::to('/') }}/img/fille.jpg" style="max-width: 650px;" class="card-img-top" alt="...">
                    <div class="card-bodys">
                        <h5 class="card-title">6</h5>
                        <p class="card-text" style="max-width: 300px;">Moi, c'est YAPO Sarah,</p>
                    </div>
                </div>
            </div>
            
        </div>

    </section>
    <section>
        <div class="row">
            <div class="col-3">
                <a href="{{ URL::to('/') }}" class="bouton-retour">Retour</a>
            </div>
            <div class="col-3">
                <a href="{{ URL::to('/services') }}" class="bouton-suivant" style="margin-left: 800px">Suivant</a>
            </div>
        </div>
    </section>
    </div>
    <br><br>
@endsection
