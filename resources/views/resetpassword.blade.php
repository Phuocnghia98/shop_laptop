@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<div id="content">

    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Reset Password</li>
        </ol>
      </div>
    </div>

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Login Your Account -->
            <h5>{{ __('Reset Password') }}</h5>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <!-- FORM -->
            <form method="POST" action="{{ route('password.email2') }}">
                @csrf
              <ul class="row">
                <li class="col-sm-12">
                  <label for="email">{{ __('E-Mail Address') }}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </label>
                </li>

                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">{{ __('Send Password Reset Link') }}</button>
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
