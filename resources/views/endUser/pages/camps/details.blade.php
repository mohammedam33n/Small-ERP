@extends('endUser.layouts.master')
@section('title')
@endsection
@section('content')

<section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/17.jpg');">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <div class="header-inner-title text-center position-relative">
            <h1 class="text-white fw-normal">{{$camp->title}}</h1>
            <p class="text-white mb-0">The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="service-details">
            <img class="img-fluid border-radius mb-4 mb-md-5" src="images/feature-info/01.jpg" alt="">
            <h4 class="fw-bold">{{$camp->title}} Details</h4>
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">camp Title</label>
                      <input type="text" readonly class="form-control" id="exampleInputName" value="{{$camp->title}}" placeholder="Name">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">camp Category</label>
                      <input type="text" readonly class="form-control" id="exampleInputName" value="{{$camp->category}}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">Price</label>
                      <input type="text" readonly class="form-control" id="exampleInputName" value="{{$camp->price}}">
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="exampleInputName">camp Body</label>
                    <textarea class="form-control" readonly rows="5" id="exampleInputEnquiry">{{$camp->body}}</textarea>
                  </div>

                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">Start date</label>
                      <input type="text" readonly class="form-control" id="exampleInputName" value="{{$camp->start_date}}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">Location</label>
                      <input type="text" readonly class="form-control" id="exampleInputName" value="{{$camp->location}}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="exampleInputName">Discount Code</label>
                      <input type="text" class="form-control" name="discount" id="exampleInputName" placeholder="Enter discount code">
                    </div>
                    
                </div>  

                <div class="col-md-4 mb-4">
                    <label for="exampleInputName">Total Price</label>
                  <input type="text" class="form-control" readonly name="total_price" id="exampleInputName" value="{{$camp->price}}">
                </div>
                <input type="text" class="form-control" hidden name="camp_id" id="exampleInputName" value="{{$camp->id}}" placeholder="Enter discount code">
                <div class="col-md-12 mb-0">
                  <button type="submit" class="btn btn-primary">Subscribe<i class="fas fa-arrow-right ps-3"></i></button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  @endsection