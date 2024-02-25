<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Little Grooo - Products Page</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">

        <style>
            .bn {
                height: 60px;
                margin-top: -60px; 
                width:100%;
                color: #ffffff; 
                background-color:#FF4400; 
                font-weight:bolder;
                border:1px solid orangered;
                border-radius: 8px;
            }
            .bn:hover {
                background-color: lightgreen;
                border: 2px solid green;
                color: #000000;
            }
            .lab {
                font-weight: bolder;
                color:black;
                font-size: large;
            }
        </style>

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
                                <a class="nav-link" href="{{route('about')}}">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('products')}}">Products</a>
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

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">We provide you</span>
                                <span class="d-block text-dark">Fashionable Stuffs</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12">
                            <h2 class="mb-5">New Arrivals</h2>
                        </div>

                        <!-- Tree Pot -->
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                    <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Tree pot
                                        </h5>

                                        <p class="product-p">Original package design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$25</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-one'>BUY</button>

                            </div>
                        </div>

                        <!-- Fashion Set -->
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">

                                    <img src="images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg" class="img-fluid product-image" alt="">


                                <div class="product-top d-flex">
                                    <span class="product-alert">Discounted Price</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Fashion set
                                        </h5>

                                        <p class="product-p">Costume package</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$35</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-two'>BUY</button>
                            </div>
                        </div>

                        <!-- Juice Drinks -->
                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">

                                    <img src="images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg" class="img-fluid product-image" alt="">


                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Juice Drinks
                                        </h5>

                                        <p class="product-p">Nature made another world</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$45</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-three'>BUY</button>
                            </div>
                        </div>

                        <div class="col-12">
                            <h2 class="mb-5">Popular</h2>
                        </div>

                        <!-- Package -->
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">

                                    <img src="images/product/team-fredi-8HRKoay8VJE-unsplash.jpeg" class="img-fluid product-image" alt="">


                                <div class="product-top d-flex">
                                    <span class="product-alert">Trending</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Package
                                        </h5>

                                        <p class="product-p">Original package design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$50</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-four'>BUY</button>
                            </div>
                        </div>

                        <!-- Bottle -->
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">

                                    <img src="images/product/quokkabottles-kFc1_G1GvKA-unsplash.jpeg" class="img-fluid product-image" alt="">


                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Bottle
                                        </h5>

                                        <p class="product-p">Package design</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$100</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-five'>BUY</button>
                            </div>
                        </div>

                        <!-- Medicine -->
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">

                                    <img src="images/product/anis-m-WnVrO-DvxcE-unsplash.jpeg" class="img-fluid product-image" alt="">


                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            Medicine
                                        </h5>

                                        <p class="product-p">Original design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$200</small>
                                </div>
                                <button type="button" class="bn" data-bs-toggle="modal" data-bs-target='#product-six'>BUY</button>
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
                            <li class="footer-menu-item"><a href="{{route('about')}}" class="footer-menu-link">Story</a></li>

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

        <!-- CART MODAL -->
        <!-- Tree Pot -->
        <div class="modal fade" id="product-one" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_1()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Tree pot">
                                    <h3 class="modal-title" id="exampleModalLabel">Tree pot</h3>

                                    <p class="product-price text-muted mt-3">$25</p>
                                    <input type="hidden" name="" id="val_1" value="25">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id="q1" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total1"> 
                                        <p><strong>Total: $<span id="result1"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Fashion set -->
        <div class="modal fade" id="product-two" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_2()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Fashion set">
                                    <h3 class="modal-title" id="exampleModalLabel">Fashion set</h3>

                                    <p class="product-price text-muted mt-3">$35</p>
                                    <input type="hidden" name="" id="val_2" value="35">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id=-" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>X-Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total2"> 
                                        <p><strong>Total: $<span id="result2"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Juice Drinks -->
        <div class="modal fade" id="product-three" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_3()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Juice Drinks">
                                    <h3 class="modal-title" id="exampleModalLabel" style="margin-right: -50px;">Juice Drinks</h3>

                                    <p class="product-price text-muted mt-3">$45</p>
                                    <input type="hidden" name="" id="val_3" value="45">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id="q3" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total3"> 
                                        <p><strong>Total: $<span id="result3"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Package -->
        <div class="modal fade" id="product-four" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_4()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/team-fredi-8HRKoay8VJE-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Package">
                                    <h3 class="modal-title" id="exampleModalLabel" style="margin-right: -50px;">Package</h3>

                                    <p class="product-price text-muted mt-3">$50</p>
                                    <input type="hidden" name="" id="val_4" value="50">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id="q4" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total4"> 
                                        <p><strong>Total: $<span id="result4"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bottle -->
        <div class="modal fade" id="product-five" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_5()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/quokkabottles-kFc1_G1GvKA-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Bottle">
                                    <h3 class="modal-title" id="exampleModalLabel" style="margin-right: -50px;">Bottle</h3>

                                    <p class="product-price text-muted mt-3">$100</p>
                                    <input type="hidden" name="" id="val_5" value="100">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id="q5" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total5"> 
                                        <p><strong>Total: $<span id="result5"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Medicine -->
        <div class="modal fade" id="product-six" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column" style="margin-top: -100px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('payment_gateway')}}" method="post" onsubmit="return payment_6()">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <img src="images/product/anis-m-WnVrO-DvxcE-unsplash.jpeg" class="img-fluid product-image" alt="" style="height: 420px;">
                                </div>

                                <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                                    <input type="hidden" name="item_name" value="Medicine">
                                    <h3 class="modal-title" id="exampleModalLabel" style="margin-right: -50px;">Medicine</h3>

                                    <p class="product-price text-muted mt-3">$200</p>
                                    <input type="hidden" name="" id="val_6" value="200">

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="color" class="lab">Color</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="color">
                                            <option></option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                            <option>Yellow</option>
                                            <option>Pink</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="quantity" class="lab">Quantity</label>
                                        <select class="form-select cart-form-select" id="q6" name="quantity">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-3">
                                        <label for="size" class="lab">Size</label>
                                        <select class="form-select cart-form-select" id="inputGroupSelect01" name="size">
                                            <option></option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>

                                    <div class="border-top mt-4 pt-3">
                                        <input type="hidden" name="total" id="total6"> 
                                        <p><strong>Total: $<span id="result6"></span> </strong></p>
                                        <hr>
                                    </div>
                                    <button type="submit" class="bn" style="width: 100px;margin-left: 250px; margin-bottom: -180px; margin-top: 10px;">Checkout</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

<script>
    function payment_1()
    {
        var val = document.getElementById('val_1').value;
        var count = document.getElementById('q1').value;
        var result = count * val;
        document.getElementById('total1').value = result;
        document.getElementById('result1').innerHTML = result;
    }
    function payment_2()
    {
        var val = document.getElementById('val_2').value;
        var count = document.getElementById('q2').value;
        var result = count * val;
        document.getElementById('total2').value = result;
        document.getElementById('result2').innerHTML = result;
    }
    function payment_3()
    {
        var val = document.getElementById('val_3').value;
        var count = document.getElementById('q3').value;
        var result = count * val;
        document.getElementById('total3').value = result;
        document.getElementById('result3').innerHTML = result;
    }
    function payment_4()
    {
        var val = document.getElementById('val_4').value;
        var count = document.getElementById('q4').value;
        var result = count * val;
        document.getElementById('total4').value = result;
        document.getElementById('result4').innerHTML = result;
    }
    function payment_5()
    {
        var val = document.getElementById('val_5').value;
        var count = document.getElementById('q5').value;
        var result = count * val;
        document.getElementById('total5').value = result;
        document.getElementById('result5').innerHTML = result;
    }
    function payment_6()
    {
        var val = document.getElementById('val_6').value;
        var count = document.getElementById('q6').value;
        var result = count * val;
        document.getElementById('total6').value = result;
        document.getElementById('result6').innerHTML = result;
    }
</script>