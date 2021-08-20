@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<div id="content">

    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Confirm Password</li>
        </ol>
      </div>
    </div>

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Login Your Account -->
            <h5>{{ __('Confirm Password') }}</h5>
           <h5> {{ __('Please confirm your password before continuing.') }} </h5>
            <!-- FORM -->
            <form method="POST" action="{{ route('password.confirm2') }}">
                @csrf
              <ul class="row">
                <li class="col-sm-12">
                  <label for="password">{{ __('Password') }}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                </li>

                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">{{ __('Confirm Password') }}</button>
                  @if (Route::has('password.request2'))
                        <a class="forget" href="{{ route('password.request2') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                @endif
                </li>
              </ul>
            </form>
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
