@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<!-- Content -->
<div id="content">

    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">History Order</li>
            </ol>
        </div>
    </div>

    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID-Order</th>
                        <th class="text-center">Order date</th>
                        <th class="text-center">Customer Number</th>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">City</th>
                        <th class="text-center">Country</th>
                        <th class="text-center">State</th>
                        <th class="text-center">Details </th>

                    </tr>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td class="text-center padding-top-60">{{ $item['id_order'] }}</td>

                                <td class="text-center padding-top-60">{{ $item['order_date'] }}</td>

                                <td class="text-center padding-top-60">{{ $item['customer_number'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['customer_name'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['phone'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['address_line1'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['city'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['country'] }}</td>
                                <td class="text-center padding-top-60">{{ $item->customers['state'] }}</td>
                                <td class="text-center padding-top-60"><a class="btn-round" href="{{ route('showOrderdetail') }}">View</a></td>
                            </tr>
                        @endforeach
                        <!-- Item Cart -->
                    </tbody>
                </thead>

            </table>
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
