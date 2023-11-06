<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titre')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"> --}}
    {{-- </script> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content">
        <nav class="navbar bg-body-tertiary fixed-top" style="box-shadow: 0px 5px 10px 0px">
            <div class="container-fluid">
                <a class="navbar0-brand" href="#"><img src="{{ asset('img/logo.jpg') }}" alt=""
                        width="150px" height="auto"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item active"><a href="{{ URL::to('/') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item active"><a href="{{ URL::to('/profils') }}" class="nav-link">Profils</a>
                            </li>
                            <li class="nav-item active"><a href="{{ URL::to('/services') }}"
                                    class="nav-link">Services</a>
                            </li>
                            <li class="nav-item active"><a href="{{ URL::to('/inscription') }}"
                                    class="nav-link">Inscription</a>
                            </li>
                            <li class="nav-item active"><a href="{{ URL::to('/formulaire') }}"
                                    class="nav-link">Compte</a>
                            </li>
                            <li class="nav-item active"><a href="{{ URL::to('/commentaire') }}"
                                    class="nav-link">Commentaire</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search" action="/recherche" method="get">
                            <input class="form-control me-2"  name="q" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <br><br>
        <!-- END nav -->

        <div class="container  " style="margin-top: 6%">
            <div class="row justify-content-center">
                @yield('contenu')
            </div>
        </div>
        <section>
            <footer>
                <div class="row text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <h2>copyright@</h2>
                            <h3>N'hésitez pas à appeler en cas de besoin</h3>
                            <h4>Email: cleaningservice@gmail.com</h4>
                            <h4>Tel: 02002768</h4>
                        </div>
                    </div>
                </div>
            </footer>
            
    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        </section>
    </div> --}}
    
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn5kFF3f+J5Bk5Rqf5F02O5N6S" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
