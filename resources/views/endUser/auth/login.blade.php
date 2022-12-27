@extends('endUser.layouts.master')
@section('content')
    <!--=================================
                contact Form -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-around position-relative pt-5">
                <div class="col-lg-4 col-md-5 mb-4">
                    <div class="is-sticky">
                        <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
                        <h5 class="text-light">
                            <p class="signup-link">New Here?
                                <a href="{{route('registerPage')}}" >
                                    Create an account
                                </a>
                            </p>
                        </h5>

                    </div>
                </div>
                <div class="col-lg-7 col-md-7 pe-lg-5">
                    <div class="p-4 p-md-5 bg-white shadow">
                        <h3>Need assistance? please fill the form</h3>


                        <form class="mt-4" action="{{ route('login') }}" method="post">
                            @csrf


                            <div class="mb-3">
                                <input id="email" name="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="email"value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input id="password" name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>



                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary"> {{ __('Login') }}
                                    <i class="fas fa-arrow-right ps-3"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-bg-logo text-center">
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            contact Form  -->
