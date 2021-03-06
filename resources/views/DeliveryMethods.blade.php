@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
     <!-- Content -->
  <div id="content">

    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">

          <!-- Step 1 -->
          <li class="col-sm-3">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Shopping Cart</h6>
            </div>
          </li>

          <!-- Step 2 -->
          <li class="col-sm-3">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Payment Methods</h6>
            </div>
          </li>

          <!-- Step 3 -->
          <li class="col-sm-3 current">
            <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Delivery Methods</h6>
            </div>
          </li>

          <!-- Step 4 -->
          <li class="col-sm-3">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 4</span>
              <h6>Confirmation</h6>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Payout Method -->
    <section class="padding-bottom-60">
      <div class="container">
        <!-- Payout Method -->
        <div class="pay-method">
          <div class="row">
            <div class="col-md-6">

              <!-- Your information -->
              <div class="heading">
                <h2>Your information</h2>
                <hr>
              </div>
              <form>
                <div class="row">

                  <!-- Name -->
                  <div class="col-sm-6">
                    <label> First name
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Number -->
                  <div class="col-sm-6">
                    <label> Last Name
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Card Number -->
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-xs-6">
                        <label> Country </label>
                        <select class="selectpicker">
                          <option> USA</option>
                          <option> USA</option>
                          <option> USA</option>
                          <option> USA</option>
                          <option> USA</option>
                          <option> USA</option>
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <label> City </label>
                        <select class="selectpicker">
                          <option> City</option>
                          <option> City</option>
                          <option> City</option>
                          <option> City</option>
                          <option> City</option>
                          <option> City</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <label> State
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Zip code -->
                  <div class="col-sm-4">
                    <label> Zip code
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Address -->
                  <div class="col-sm-8">
                    <label> Address
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Phone -->
                  <div class="col-sm-6">
                    <label> Phone
                      <input class="form-control" type="text">
                    </label>
                  </div>

                  <!-- Number -->
                  <div class="col-sm-6">
                    <label> Email
                      <input class="form-control" type="email">
                    </label>
                  </div>
                </div>
              </form>
            </div>

            <!-- Select Your Transportation -->
            <div class="col-md-6">
              <div class="heading">
                <h2>Select Your Transportation</h2>
                <hr>
              </div>
              <div class="transportation">
                <div class="row">

                  <!-- Free Delivery -->
                  <div class="col-sm-6">
                    <div class="charges">
                      <h6>Free Delivery</h6>
                      <br>
                      <span>7 - 12 days</span> </div>
                  </div>

                  <!-- Free Delivery -->
                  <div class="col-sm-6">
                    <div class="charges select">
                      <h6>Fast Delivery</h6>
                      <br>
                      <span>4 - 7 days</span> <span class="deli-charges"> +$25 </span> </div>
                  </div>
                  <!-- Expert Delivery -->
                  <div class="col-sm-6">
                    <div class="charges">
                      <h6>Expert Delivery</h6>
                      <br>
                      <span>24 - 48 Hours</span> <span class="deli-charges"> +$75 </span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="pro-btn"> <a href="#." class="btn-round btn-light">Back to Payment</a> <a href="#." class="btn-round">Go Confirmation</a> </div>
      </div>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="{{ asset('assets/images/c-img-1.png') }}" alt="" ></li>
          <li><img src="{{ asset('assets/images/c-img-2.png') }}" alt="" ></li>
          <li><img src="{{ asset('assets/images/c-img-3.png') }}" alt="" ></li>
          <li><img src="{{ asset('assets/images/c-img-4.png') }}" alt="" ></li>
          <li><img src="{{ asset('assets/images/c-img-5.png') }}" alt="" ></li>
        </ul>
      </div>
    </section>

    <!-- Newslatter -->
    <section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content -->
@endsection
