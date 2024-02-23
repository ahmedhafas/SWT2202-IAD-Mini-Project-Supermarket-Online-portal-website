@extends('layout')
@section('title', 'Little Grooo - FAQs Page')
@section('content')
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
                                <a class="nav-link active" href="{{route('faq')}}">FAQs</a>
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

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Your favorite questions</span>
                                <span class="d-block text-dark">and our answers to them</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="faq section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-8 col-12">
                            <h2>General Info.</h2>

                            <div class="accordion" id="accordionGeneral">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                        What is this Little Grooo?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><strong>Little Grooo</strong> is a grocery, pharmacical, and foods supermarket, free offers and vouchers for everyone. There are different categories included here and you can explore that as you need.</p>

                                            <p class="large-paragraph">A grocery store is a retail store that primarily sells a general range of food products, which may be fresh or packaged. In the US, the term "grocery store" is often used interchangeably with "supermarket," which is a larger store that sells food and household supplies. Pharmacal supermarkets are not specifically mentioned in the search results.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                        What is Little Grooo website?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><a href="{{route('home')}}">Grooo</a> is a great website to get free offers and materials also gifts for your business or personal use. Grooo website has been online for almost 8 years now. Thank you for visiting our website.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                                        How do I support your website?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph">You can support our Grooo website by sharing it to your friends or colleagues on the web or social media.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <h2 class="mt-5">About <span>our products</span></h2>

                            <div class="accordion" id="accordionProduct">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductOne" aria-expanded="true" aria-controls="accordionProductOne">
                                        What is Grooo Design?
                                        </button>
                                    </h2>

                                    <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProduct">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><strong>Catalogue design is</strong> the process of creating a printed or digital catalog that showcases a companys products or services.</p>

                                            <p class="large-paragraph">It involves designing layouts, selecting images, and organizing information in a visually appealing and easy-to-navigate way to attract and engage potential customers.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo" aria-expanded="false" aria-controls="accordionProductTwo">
                                        How do I use the product?
                                        </button>
                                    </h2>

                                    <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionProduct">

                                        <div class="accordion-body">
                                            <p class="large-paragraph">To use a product, start by reading the instructions or user manual carefully to understand its features, functions, and any safety precautions. Follow the recommended usage guidelines, such as dosage, application method, or operating instructions.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

        </main>
@endsection