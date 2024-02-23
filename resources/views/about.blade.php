<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Little Grooo - About Page</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="{{route('home')}}">
                        <strong><span>Little</span> Grooo</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="{{route('sign-in')}}" class="bi-person custom-icon me-3"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('about')}}">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products')}}">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="{{route('sign-in')}}" class="bi-person custom-icon me-3"></a>
                        </div>
                    </div>

                    <div class="d-none d-lg-block" id="signoutbutton">
                            <form action="{{route('sign-out')}}" method="post">
                                @csrf
                                <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                    Sign Out
                                </button>
                            </form>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Company</span>
                                <span class="d-block text-dark">Fashion</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/header/businesspeople-meeting-office-working.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="team section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">Meet our <span>team</span></h2>
                        </div>
                        
                        @foreach($users as $u)
                        <div class="col-lg-12 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="images/people/user_icon.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">{{$u->name}}</h5>
                                    <strong class="text-muted">{{$u->position}}</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target='#{{$u->name}}'>
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">Customer love, <br> <span>Little</span> Grooo</h2>

                            <div class="slick-testimonial">
                                @foreach($users as $u)
                                <div class="slick-testimonial-caption">
                                    <p class="lead">{{$u->experience}}</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/user_icon.jpg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>{{$u->name}}, <strong class="text-muted">{{$u->position}}</strong></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="{{route('home')}}">Little</a> Grooo</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2024 <strong>Little Grooo</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="{{route('home')}}" target="_blank">Grooo</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="{{route('about')}}" class="footer-menu-link">About</a></li>

                            <li class="footer-menu-item"><a href="{{route('products')}}" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="{{route('faq')}}" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="{{route('contact')}}" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- TEAM MEMBER MODAL -->
        @foreach($users as $u)
        <div class="modal fade" id="{{$u->name}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">{{$u->name}}</h3>

                        <h6 class="text-muted">{{$u->position}}</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">{{$u->experience}}</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>{{$u->bio}}</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
