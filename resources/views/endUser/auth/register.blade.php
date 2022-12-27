@extends('endUser.layouts.master')
@section('content')
    <!--=================================
                                                        contact Form -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>Rigester</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-around position-relative pt-5">
                <div class="col-lg-4 col-md-5 mb-4">
                    <div class="is-sticky">
                        <h4 class="mb-4">Get started with a free account.</h4>
                        <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 pe-lg-5">
                    <div class="p-4 p-md-5 bg-white shadow">
                        <h3>Need assistance? please fill the form</h3>


                        <form class="mt-4" action="{{ route('register') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <input id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="username"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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
                                <input id="password-confirm" name="password_confirmation" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            </div>

                            <div class="mb-3">
                                <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror" id="terms-checkbox" name="terms">
                                <label class="form-check-label" for="terms-checkbox">
                                    I agree to the terms and conditions
                                </label>
                                @error('terms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary"> {{ __('Register') }}
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
