@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<div id="content">

    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Authentication</li>
        </ol>
      </div>
    </div>

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Login Your Account -->
            <h5>{{ __('Login') }}</h5>

            <!-- FORM -->
            <form method="POST" action="{{ route('login2') }}">
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
                <li class="col-sm-6">
                  <div class="checkbox checkbox-primary">
                    <input class="styled" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember"> {{ __('Remember Me') }} </label>
                  </div>
                </li>
                <li class="col-sm-6">
                    @if (Route::has('password.request2'))
                        <a class="forget" href="{{ route('password.request2') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">{{ __('Login') }}</button>
                </li>
              </ul>
            </form>
          </div>

          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            <h5>{{ __('Register') }}</h5>

            <!-- FORM -->
            <form method="POST" action="{{ route('register2') }}">
                @csrf
              <ul class="row">
                <li class="col-sm-12">
                  <label for="name">{{ __('Name') }}
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
                </li>
                <li class="col-sm-12">
                  <label for="email">{{ __('E-Mail Address') }}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                </li>
                <li class="col-sm-12">
                  <label for="password">{{ __('Password') }}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                </li>
                <li class="col-sm-12">
                    <label for="password-confirm">{{ __('Confirm Password') }}
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">{{ __('Register') }}</button>
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
