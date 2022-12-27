@extends('endUser.layouts.master')
@section('title')
@endsection
@section('content')

<section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <div class="header-inner-title text-center position-relative">
            <h1 class="text-white fw-normal">All Courses here</h1>
            <p class="text-white mb-0">Award-winning website design & creative digital agency services</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="space-ptb">
    <div class="container">
      <div class="row">
        @foreach ($courses as $course)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-info feature-info-style-02 h-100">
              <div class="feature-info-icon">
                <i class="flaticon-data"></i>
                <h5 class="mb-0 ms-4 feature-info-title">{{$course->title}}</h5>
              </div>
              <div class="feature-info-content">
                <p class="mb-0">{{$course->body}}</p>
                <a href="{{route('course.show', $course->id)}}" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
              <div class="feature-info-bg-img" style="background-image: url('images/feature-info/01.jpg');"></div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row mt-5">
        <div class="col-12 d-md-flex justify-content-center align-items-center">
          <p class="mb-3 mb-md-0 mx-0 mx-md-3">Start now! Your big opportunity may be right where you are!</p>
          <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3">See All Services<i class="fas fa-arrow-right ps-3"></i></a>
        </div>
      </div>
    </div>
  </section>

  @endsection
