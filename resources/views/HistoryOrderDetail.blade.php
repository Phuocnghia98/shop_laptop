@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<!-- Content -->
<div id="content">

    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">History Order Details</li>
            </ol>
        </div>
    </div>

    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        {{-- <th>Product</th> --}}
                        <th class="text-center">Product Code</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">TotalPrice</th>
                        {{-- <th>&nbsp; </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                        $sub_total = 0;
                    @endphp
                    @foreach ($orderdetail as $itemdetail)
                        @php
                            $total += $itemdetail['price_each'] * $itemdetail['quantity_ordered'];
                            $sub_total = $itemdetail['price_each'] * $itemdetail['quantity_ordered'];
                        @endphp
                        <tr>
                            <td class="text-center padding-top-60">{{ $itemdetail['product_code'] }}</td>

                            <td class="text-center padding-top-60">{{ $itemdetail['product_name'] }}</td>

                            <td class="text-center padding-top-60">{{ number_format($itemdetail['price_each']) }}
                            </td>
                            <td class="text-center padding-top-60">{{ $itemdetail['quantity_ordered'] }}</td>

                            <td class="text-center padding-top-60">{{ number_format($sub_total) }}</td>

                        </tr>
                    @endforeach
                    <!-- Item Cart -->
                </tbody>
            </table>
            <div class="g-totel">
                <h5>Grand total: <span>{{ number_format($total) }}</span></h5>
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
