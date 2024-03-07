@extends('layout')
@section('title', 'Little Fashion - Sign-In Page')
@section('content')   

@if (session()->has('success'))
    <div class="alert alert-success" style="font-weight: 900; font-size:larger; text-align:center; ">
        {{ session()->get('success') }}
    </div>
@endif

@if (Session::has('wrong'))
    <div class="alert alert-danger" style="font-weight: 900; font-size:larger; text-align:center; ">
        {{ Session::get('wrong') }}
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-warning" style="font-weight: 900; font-size:larger; text-align:center; ">
        {{ session()->get('message') }}
    </div>
@endif

        <main>

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Sign In</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" action="{{route('sign-in_Post')}}" method="post" >
                                        @csrf
                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required value="{{old('email')}}">

                                            <label for="email">Email address</label>
                                            @if($errors->has('email'))
                                                <span style="font-weight: 900; font-size:larger; text-align:center; ">
                                                    <strong>{{$errors->first('email')}}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                                            <label for="password">Password</label>
                                        </div>

                                        <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                            Sign in
                                        </button>

                                        <p class="text-center">Don’t have an account? <a href="{{route('sign-up')}}">Create One</a></p>

                                    </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

@endsection