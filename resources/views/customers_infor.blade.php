@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<div id="content">

    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Customers Info</li>
            </ol>
        </div>
    </div>

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
        <div class="container">
            <div class="row">
                <!-- Don’t have an Account? Register now -->
                <div class="col-md-6">
                    <h5>{{ __('Customers Info') }}</h5>

                    <!-- FORM -->
                    <form method="POST" action="{{ route('customersinfo.ajax') }}" name="custormer" id="custormerForm">
                        @csrf
                        <span id="res_message"></span>
                        <ul class="row">

                            <li class="col-sm-12">
                                <label for="name">{{ __('Name') }}
                                    <input type="text" class="form-control" id="name" placeholder="Please enter name"
                                        required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="phone">{{ __('Phone') }}
                                    <input type="text" class="form-control" id="phone" placeholder="Please enter phone"
                                        required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="country">{{ __('Country') }}
                                    <input type="text" class="form-control" id="country"
                                        placeholder="Please enter country" required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="city">{{ __('City') }}
                                    <input type="text" class="form-control" id="city" placeholder="Please enter city"
                                        required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="state">{{ __('State') }}
                                    <input type="text" class="form-control" id="state" placeholder="Please enter state"
                                        required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="address">{{ __('Address') }}
                                    <input type="text" class="form-control" id="address"
                                        placeholder="Please enter address" required>
                                </label>
                            </li>
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round">{{ __('Save') }}</button>
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

@section('script')
<script>
    $('#custormerForm').on('submit', function(e) {
        e.preventDefault();
        id = $('#id').val();
        name = $('#name').val();
        phone = $('#phone').val();
        country = $('#country').val();
        city = $('#country').val();
        state = $('#state').val();
        address = $('#address').val();
        $.ajax({
            url: "{{ route('customersinfo.ajax') }}",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                phone: phone,
                country: country,
                city: city,
                state: state,
                address: address,
            },
            success: function(response) {
                $('#res_message').show();
                window.location.href = "{{ route('ShoppingCart') }}";
                // $('#res_message').html(response.msg);

                // document.getElementById("custormerForm").reset();
                // setTimeout(function() {
                //     $('#res_message').hide();
                //     // $('#msg_div').hide();
                // });
            }
        });
    });
</script>
@endsection
