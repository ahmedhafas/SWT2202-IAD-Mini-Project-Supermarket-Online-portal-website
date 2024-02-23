@extends('layout')
@section('title', 'Little Fashion - Sign-Up Page')
@section('content')

<main>

    <section class="sign-in-form section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mx-auto col-12">

                    <h1 class="hero-title text-center mb-5">Sign Up</h1>

                    <div class="social-login d-flex flex-column w-50 m-auto">
                        
                        <a href="#" class="btn custom-btn social-btn mb-4">
                            <i class="bi bi-google me-3"></i>

                            Continue with Google
                        </a>

                        <a href="#" class="btn custom-btn social-btn">
                            <i class="bi bi-facebook me-3"></i>

                            Continue with Facebook
                        </a>
                    </div>

                    <div class="div-separator w-50 m-auto my-5"><span>or</span></div>

                    <div class="row">
                        <div class="col-lg-8 col-11 mx-auto">
                                <form class="row g-3" action="{{route('sign-up_Post')}}" method="post">
                                    @csrf
                                    <!-- Name -->
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required value="{{old('name')}}">
                                        @if($errors->has('name'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required value="{{old('email')}}">
                                        @if($errors->has('email'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Password -->
                                    <div class="col-md-6">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
                                        @if($errors->has('password'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Experience -->
                                    <div class="col-12">
                                        <input type="text" name="experience" class="form-control" id="experience" placeholder="Your Experience" required value="{{old('experience')}}">
                                        @if($errors->has('experience'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('experience')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Country -->
                                    <div class="col-md-4">
                                        <select id="country" name="country" class="form-select" required>
                                            <option selected>Country</option>
                                            <option>Sri Lanka</option>
                                            <option>India</option>
                                            <option>UAE</option>
                                            <option>Dubai</option>
                                        </select>
                                        @if($errors->has('country'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('country')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Position -->
                                    <div class="col-md-8">
                                        <input type="text" name="position" class="form-control" id="position" placeholder="Your Position" required value="{{old('position')}}">
                                        @if($errors->has('position'))
                                        <span style="font-weight: 900; font-size:medium; text-align:center; color:red;">
                                            <strong>{{$errors->first('position')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- Bio data -->
                                    <div class="col-12">
                                        <textarea id="bio" name="bio" class="form-control" placeholder="Tell about yourself" required style="height: 140px"></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn custom-btn form-control mt-4 mb-3" style="height: 40px; padding-top: 8px; border-radius: 6px; width:565px; margin-left:5px; ">
                                        Create account
                                    </button>
                                </form>
                                <p class="text-center">Already have an account? Please <a href="{{route('sign-in')}}">Sign In</a></p>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

</main>

@endsection