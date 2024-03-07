<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation setup our project

- <h4>Two different ways of setup here</h4>
    1. Open the laravel project in your local working space
    2. Open the terminal in project directory
    3. Enter this command
        <p align="justify" style="font-family: courier new; font-style: italic;">composer install</p>

## Database Details
Database name : little_grooo
Tables: users table, contact table and payment table

===============================================================================================================================================
###### Controllers & Models ###############################################################################
<!-- One controller and two models i was used in this project -->
Controller : UserController
Model : User, Contact, & payment

>>>> User Model : User/ Customer Sign-in & Sign-up process with database
>>>> Contact Model : Get feedback about into customers' and ask their credentials before send their opinios

===============================================================================================================================================
===============================================================================================================================================

###### UserController #####################################################################################
>>>> In here, i was used sign-in, sign-up, and sign-out functions user registration and authorization

    <!-- Sign-up -->
    public function sign_up(Request $req) {
        $req->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:4 | max:10'
        ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $res = $user->save();

        if ($res)
        {
            return redirect()
            ->route('sign-in')
            ->withSuccess("Registered Successfully!!!");
        } else {
            return redirect()
            ->route('sign-up')
            ->withWrong('Registered Failure!! Try Again!!!');
        }
    }

    <!-- Sign-in function -->
    public function sign_in(Request $req)
    {
        
        $credentials = $req->validate([
            'email' =>'required | email',
            'password' => 'required | min:4 | max:10'
        ]);

        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();
            return redirect()
            ->route('home')
            ->with("message","you sign-in Successfully!!!");
        } else {
            return redirect()
            ->route('sign-in')
            ->withWrong('Sign-in Failure!! Try Again!!!');
        }
    }

    <!-- Sign-out function -->
    public function sign_out(Request $req):RedirectResponse
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('sign-in');
    }

>>>>>>>>>>> when user entered the web page, our web site will collect the user data and feedback
    public function contact(Request $req) {

        $req->validate([
            'name' =>'required',
            'email' =>'required | email | unique:contacts',
          'subject' =>'required',
         'message' =>'required'
        ]);

        $contact = new Contact();

        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();
        
        return view('contact');
    }

>>>>>>>>> When user make the payment, this function will store the user payment details
    public function payment_gateway(Request $req)
    {
        $req->validate([
            'item_name' =>'required | min: 3',
            'color' =>'required | min : 2',
            'quantity' =>'required | numeric',
          'size' =>'required | min : 3',
           'total' =>'required'
        ]);
        $payment = new Payment();
        $payment->item_name = $req->item_name;
        $payment->color = $req->color;
        $payment->quantity = $req->quantity;
        $payment->size = $req->size;
        $payment->total = $req->input('total');
        $res = $payment->save();

        if ($res) {
            return back()
            ->with('success', 'Payment Successful');
        } else {
            return back()
            ->with('failed', 'Payment Failed');
        }
    }
========================================================================================================================================
========================================================================================================================================

###### Sweet Alert 2 ################################################################
[This function used to display alert message with animation]
>>> Using this [<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>] js CDN link to display the alert message in animations varous types
###### Cart Modal ##################################################################
>>>>> in here i was used Cart Modal to display the alert messages when click the buttons
[<!-- CARD MODAL to display the alert message when user submit or register form -->
        <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                            </div> -->
                            <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">Feedback send successfully!!!</h3>
                            </div>
                            <!-- <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">Tree pot</h3>
                                <p class="product-price text-muted mt-3">$25</p>
                                <p class="product-p">Quatity: <span class="ms-1">4</span></p>
                                <p class="product-p">Colour: <span class="ms-1">Black</span></p>
                                <p class="product-p pb-3">Size: <span class="ms-1">S/S</span></p>
                                <div class="border-top mt-4 pt-3">
                                    <p class="product-p"><strong>Total: <span class="ms-1">$100</span></strong></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>]
===================================================================================================================================================
========================================================= Routing web pages =======================================================================
===================================================================================================================================================

Route::get('/', [UserControlller::class,'home'])->name('home')->middleware('auth');

###### Return the view pages ##################################################
Route::view('/about','about')->name('about');
Route::view('/products','products')->name('products');
Route::view('/faq','faq')->name('faq');
Route::view('/contact','contact')->name('contact');
Route::view('/product-detail', 'product-detail')->name('product-detail');
Route::view('/sign-in','sign-in')->name('sign-in');
Route::view('/sign-up','sign-up')->name('sign-up');

###### Return the functions performed in *UserController* #################################
Route::post('/sign-in_Post', [UserControlller::class,'sign_up'])->name('sign-up_Post');
Route::post('/sign-up_Post', [UserControlller::class,'sign_in'])->name('sign-in_Post');
Route::post('/sign-out', [UserControlller::class,'sign_out'])->name('sign-out');
Route::post('/contact_feedback', [UserControlller::class,'contact'])->name('contactreg');

===================================================================================================================================================
============================================================== THE END ============================================================================
==================================================================================================================================================="# SWT2202-IAD-Mini-Project-Supermarket-Online-portal-website" 
"# SWT2202-IAD-Mini-Project-Supermarket-Online-portal-website" 
"# SWT2202-IAD-Mini-Project-Supermarket-Online-portal-website" 
