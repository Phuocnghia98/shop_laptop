@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
    <!-- Content -->
  <div id="content">

    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li class="active">It’s  why there’s nothing else like Mac.</li>
        </ol>
      </div>
    </div>

    <!-- Blog -->
    <section class="blog-single padding-top-30 padding-bottom-60">
      <div class="container">
        <div class="row">
          <div class="col-md-9">

            <!-- Blog Post -->
            <div class="blog-post">
              <article> <img class="img-responsive margin-bottom-20" src="{{ asset('assets/images/blog-img-1.jpg') }}" alt="" > <span>By: <strong>Claudio Doe</strong></span> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span>
                <h5>It’s why there’s nothing else like Mac. </h5>
                <p>Ut eget dolor eu ex efficitur accumsan. Ut eros nibh, tincidunt nec imperdiet sit amet, aliquam eget leo. Ut finibus sollicitudin ultricies. Fusce a ex lectus. Donec sollicitudin mi leo, nec eleifend quam luctus vel. Morbi vel neque eu libero fermentum molestie. Nam posuere nunc id consequat tempus. Maecenas imperdiet maximus turpis at tincidunt. Phasellus fermentum turpis et libero feugiat, at porttitor eros vestibulum. Suspenisse enim dolor, semper eu ultricies id, tristique nec ipsum.</p>
                <blockquote> Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </blockquote>
                <p>Curabitur ante arcu, feugiat non ante nec, cursus fermentum ante. Proin imperdiet, sapien eget rhoncus convallis, neque ante placerat turpis, vitae dignissim mi ipsum a purus. Vivamus et diam tempus, elementum felis sed, sodales libero. Morbi sed sapien sed lectus volutpat mollis. Donec porttitor sapien est, eget porta nulla lobortis non. Maecenas leo massa, porttitor lobortis nibh sit amet, sodales interdum mauris. </p>
              </article>

              <!-- Comments -->
              <div class="comments">
                <h6 class="margin-0">Comments (01)</h6>
                <ul>
                  <!-- Comments -->
                  <li class="media">
                    <div class="media-left"> <a href="#" class="avatar"> <img src="{{ asset('assets/images/avatar.jpg') }}" alt=""> </a> </div>
                    <div class="media-body padding-left-20">
                      <h6>Lucian Black <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017 </span> </h6>
                      <p>Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </p>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- ADD comments -->
              <div class="add-comments padding-top-20">
                <h6>Leave a Comment</h6>

                <!-- FORM -->
                <form>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>Name
                        <input type="text" class="form-control" name="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Email
                        <input type="text" class="form-control" name="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                        <textarea class="form-control" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 text-left">
                      <button type="submit" class="btn-round">Send Message</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>

          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar">

              <!-- Search -->
              <div class="search">
                <form>
                  <label>
                    <input type="email" placeholder="Search here">
                  </label>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>

              <!-- Categories -->
              <h6>Categories</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="cate1" class="styled" type="checkbox" >
                    <label for="cate1"> Home Audio & Theater </label>
                  </li>
                  <li>
                    <input id="cate2" class="styled" type="checkbox" >
                    <label for="cate2"> TV & Video</label>
                  </li>
                  <li>
                    <input id="cate3" class="styled" type="checkbox" >
                    <label for="cate3"> Camera, Photo & Video</label>
                  </li>
                  <li>
                    <input id="cate4" class="styled" type="checkbox" >
                    <label for="cate4"> Cell Phones & Accessories</label>
                  </li>
                  <li>
                    <input id="cate5" class="styled" type="checkbox" >
                    <label for="cate5"> Headphones</label>
                  </li>
                  <li>
                    <input id="cate6" class="styled" type="checkbox" >
                    <label for="cate6"> Video Games</label>
                  </li>
                  <li>
                    <input id="cate7" class="styled" type="checkbox" >
                    <label for="cate7"> Bluetooth & Wireless Speakers</label>
                  </li>
                  <li>
                    <input id="cate8" class="styled" type="checkbox" >
                    <label for="cate8"> Gaming Console</label>
                  </li>
                  <li>
                    <input id="cate9" class="styled" type="checkbox" >
                    <label for="cate9"> Computers & Tablets</label>
                  </li>
                  <li>
                    <input id="cate10" class="styled" type="checkbox" >
                    <label for="cate10"> Monitors</label>
                  </li>
                  <li>
                    <input id="cate11" class="styled" type="checkbox" >
                    <label for="cate11"> Home Appliances</label>
                  </li>
                  <li>
                    <input id="cate12" class="styled" type="checkbox" >
                    <label for="cate12">Office Supplies </label>
                  </li>
                </ul>
              </div>

              <!-- Recent Posts -->
              <h6>Recent Posts</h6>
              <div class="recent-post">

                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('assets/images/blog-img-2.jpg') }}" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>

                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('assets/images/blog-img-3.jpg') }}" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>

                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('assets/images/blog-img-4.jpg') }}" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
              </div>

              <!-- Quote of the Day -->
              <h6>Quote of the Day</h6>
              <div class="quote-day"> <i class="fa fa-quote-left"></i>
                <p>Suspendisse sodales cursus lorem vel
                  efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
              </div>
            </div>
          </div>
        </div>
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
