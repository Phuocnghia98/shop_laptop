@extends('layout.app')
@section('title', 'Create a ticket')
@section('content')
    <div id="content">

        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Create a ticket</li>
                </ol>
            </div>
        </div>

        <!-- Blog -->
        <section class="login-sec padding-top-30 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Login Your Account -->
                        <h5>{{ __('Create a ticket') }}</h5>
                        <!-- FORM -->
                        <form method="POST" action="">
                            @csrf
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label for="title">{{ __('Title') }}
                                        <input id="title" type="text" class="form-control" placeholder="Title" name="title">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label for="content">{{ __('Content') }}
                                        <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                        <span class="help-block">Feel free to ask us any question.</span>
                                        {{-- <input id="title" type="text" class="form-control" placeholder="Title"> --}}
                                    </label>
                                </li>

                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn-round">{{ __('Submit') }}</button>
                                    <button class="btn-round">{{ __('Cancel') }}</button>
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
                    <li><img src="{{ asset('assets/images/c-img-1.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/images/c-img-2.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/images/c-img-3.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/images/c-img-4.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/images/c-img-5.png') }}" alt=""></li>
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
