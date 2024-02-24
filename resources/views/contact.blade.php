@extends('layout')
@section('title', 'Little Grooo - Contact Page')
@section('content')

@if(Session::has('success'))
    <span id="msg">
        {{ Session::get('success') }}
</span>
@endif
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
                                <a class="nav-link" href="{{route('about')}}">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products')}}">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('contact')}}">Contact</a>
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

                        <div class="col-lg-10 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Say hello to us</span>
                                <span class="d-block text-dark">love to hear you</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/header/positive-european-woman-has-break-after-work.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Let's <span>begin</span></h2>

                            <form class="contact-form me-lg-5 pe-lg-3" action="{{route('contactreg')}}" method="post" onsubmit="return delayMsg()">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                    <label for="name">Full name</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>

                                    <label for="email">Email address</label>
                                </div>
                                
                                <div class="form-floating my-4">
                                    <input type="subject" name="subject" id="subject" class="form-control" placeholder="Subject" required>

                                    <label for="subject">Subject</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                    <label for="message">Tell us about the project</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                    <button type="submit" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target='#success'>Send</button>
                                </div>
                            </form>                            
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <div class="col-6 border-end contact-info">
                                    <h6 class="mb-3">New Business</h6>

                                    <a href="mailto:hello@company.com" class="custom-link">
                                        littlegrooo@company.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 contact-info">
                                	<h6 class="mb-3">Main Studio</h6>

                                    <a href="mailto:studio@company.com" class="custom-link">
                                        grooostudio@company.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 border-top border-end contact-info">
                                    <h6 class="mb-3">Our Office</h6>

                                    <p class="text-muted">Badulla, Ella</p>
                                </div>

                                <div class="col-6 border-top contact-info">
                                    <h6 class="mb-3">Our Socials</h6>

                                    <ul class="social-icon">

                                        <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            

        </main>

        <!-- CARD MODAL to display the alert message when user submit or register form -->
        <div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">Feedback send successfully!!!</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

<script>
    function delayMsg(){
        var suc = document.getElementById('success');
        suc.style.display = 'none';
        setTimeout(suc, 1900000);
    }
</script>