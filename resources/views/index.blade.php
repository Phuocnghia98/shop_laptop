@php
use Carbon\Carbon;

@endphp

@extends('layout.app')
@section('title', 'Smart Tech')

@section('slid-sec')
    <div class="container">
        <div class="container-fluid">
            <div class="row">

                <!-- Main Slider  -->
                <div class="col-md-9 no-padding">

                    <!-- Main Slider Start -->
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>

                                <!-- SLIDE  -->
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                    data-saveperformance="off">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ secure_asset('assets/images/slider-img-1.jpg') }}" alt="slider"
                                        data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-110" data-speed="800" data-start="800" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        High Quality VR Glasses </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-60" data-speed="800" data-start="1000" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">
                                        3D Daydream View </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="10" data-speed="800" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                        Starting at </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="210" data-y="center"
                                        data-voffset="5" data-speed="800" data-start="1300" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        $49.99 </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                        data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                        data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="300" data-scrolloffset="0" style="z-index: 8;"><a href="#."
                                            class="btn-round big">Shop Now</a> </div>
                                </li>

                                <!-- SLIDE  -->
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                    data-saveperformance="off">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/images/slider-img-2.jpg') }}" alt="slider"
                                        data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-110" data-speed="800" data-start="800" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        No restocking fee ($35 savings)</div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-60" data-speed="800" data-start="1000" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">
                                        M75 Sport Watch </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="10" data-speed="800" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                        Now Only </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="210" data-y="center"
                                        data-voffset="5" data-speed="800" data-start="1300" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        $320.99 </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                        data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                        data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="300" data-scrolloffset="0" style="z-index: 8;"><a href="#."
                                            class="btn-round big">Shop Now</a> </div>
                                </li>

                                <!-- SLIDE  -->
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                    data-saveperformance="off">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ secure_asset('assets/images/slider-img-3.jpg') }}" alt="slider"
                                        data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-110" data-speed="800" data-start="800" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        Get Free Bluetooth when buy </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="-60" data-speed="800" data-start="1000" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">
                                        Flat SmartWatch </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="60" data-y="center"
                                        data-voffset="0" data-speed="800" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="300"
                                        style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                        Combo Only:</div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="240" data-y="center"
                                        data-voffset=" -5" data-speed="800" data-start="1300" data-easing="Power3.easeInOut"
                                        data-splitin="chars" data-splitout="none" data-elementdelay="0.03"
                                        data-endelementdelay="0.4" data-endspeed="300"
                                        style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                        $590.00 </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                        data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                        data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="300" data-scrolloffset="0" style="z-index: 8;"><a href="#."
                                            class="btn-round big">Shop Now</a> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Main Slider  -->
                <div class="col-md-3 no-padding">

                    <!-- New line required  -->
                    <div class="product">
                        <div class="like-bnr">
                            <div class="position-center-center">
                                <h5>New line required</h5>
                                <h4>Smartphone s7</h4>
                                <span class="price">$259.99</span>
                            </div>
                        </div>
                    </div>

                    <!-- Weekly Slaes  -->
                    <div class="week-sale-bnr">
                        <h4>Weekly <span>Sale!</span></h4>
                        <p>Saving up to 50% off all online
                            store items this week.</p>
                        <a href="#." class="btn-round">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>

                <!-- Free Shipping -->
                <li>
                    <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-left"> <i class="flaticon-arrows"></i> </div>
                    <div class="media-body">
                        <h5>Money Return</h5>
                        <span>30 Days money return</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-left"> <i class="flaticon-operator"></i> </div>
                    <div class="media-body">
                        <h5>Support 24/7</h5>
                        <span>Hotline: (+100) 123 456 7890</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-left"> <i class="flaticon-business"></i> </div>
                    <div class="media-body">
                        <h5>Safe Payment</h5>
                        <span>Protect online payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                <li role="presentation" class="active"><a href="#111_tab" aria-controls="111_tab" role="tab"
                        data-toggle="tab">Hot Product</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="111_tab">
                    <!-- Items Slider -->
                    <div class="item-slide-5 with-nav">
                        <!-- Product -->
                        @foreach ($listProductHot as $itemProduct)
                            <div class="product">
                                <article> <img class="img-responsive" src="{{ secure_asset($itemProduct->image) }}" alt="">
                                    <!-- Content -->
                                    <span class="tag">{{ $itemProduct->product_line }}</span>
                                    <a href="{{ Route('productDetails', ['id_product' => $itemProduct->id_product]) }}"
                                        class="tittle">{{ $itemProduct->product_name }}</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">{{ $itemProduct->price }} </div>
                                    {{-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> --}}
                                    <a href="{{ route('add.to.cart', $itemProduct->id_product) }}"
                                        class="cart-btn">
                                        <i class="icon-basket-loaded"></i></a>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Top Selling of the Week</h2>
                <hr>
            </div>

            <!-- Items -->
            <div class="item-col-5">

                <!-- Product -->
                <div class="product col-2x">
                    <div class="like-bnr">
                        <div class="position-center-center">
                            <h5>Smart Watch 2.0</h5>
                            <p>Space Gray Aluminum Case
                                with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                            <a href="#." class="btn-round">View Detail</a>
                        </div>
                    </div>
                </div>


                @foreach ($productsHotSale as $item)
                    <!-- Product -->
                    @foreach ($listProduct as $itemProduct)
                        @if ($itemProduct->product_code == $item->product_code)
                            <div class="product">
                                <article> <img class="img-responsive" src="{{ secure_asset($itemProduct->image) }}" alt=""
                                        id="{{ $itemProduct->id_product }}_tab"> {!! $itemProduct->cost_price > $itemProduct->price ? '<span class="sale-tag">-' . round((($itemProduct->cost_price - $itemProduct->price) * 100) / $itemProduct->cost_price) . '%</span>' : '' !!}


                                    <!-- Content -->
                                    <span class="tag">{{ $itemProduct->product_line }}</span> <a href="#"
                                        class="tittle">{{ $itemProduct->product_name }}</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">{{ $itemProduct->price }}
                                        <span>{{ $itemProduct->cost_price }}</span>
                                    </div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                </article>
                            </div>
                        @endif
                    @endforeach

                @endforeach


            </div>
        </div>
    </section>

    <!-- Main Tabs Sec -->
    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
        <div class="container">
            <ul class="nav margin-bottom-40" role="tablist">
                @php
                    $i = 0;
                @endphp
                @foreach ($listProductline as $item)
                    <li role="presentation" class="{{ $i == 0 ? 'active' : '' }}">
                        <a href="#{{ $item->id_productLine }}_tab" aria-controls="{{ $item->id_productLine }}_tab"
                            role="tab" data-toggle="tab">
                            <i class="flaticon-computer"></i>{{ $item->product_line }}<span>{{ $item->products()->count() }}
                                item</span>
                        </a>
                    </li>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- TV & Audios -->
                <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                    <!-- Items -->
                    <div class="item-slide-5 with-bullet no-nav">
                        @foreach ($listProductline as $item)
                            @foreach ($listProduct as $itemProduct)
                                @if ($itemProduct->product_line == $item->product_line)
                                    <div class="product">
                                        <article> <img class="img-responsive" src="{{ secure_asset($item->image) }}" alt="">
                                            {!! $itemProduct->cost_price > $itemProduct->price ? '<span class="sale-tag">-' . round((($itemProduct->cost_price - $itemProduct->price) * 100) / $itemProduct->cost_price) . '%</span>' : '' !!}
                                            {!! Carbon::now()->diffInHours($itemProduct->created_at) < 24 ? '<span class="new-tag">New</span>' : '' !!}
                                            <span class="tag">{{ $itemProduct->product_line }}</span> <a href="#."
                                                class="tittle">{{ $itemProduct->product_name }}</a>
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                    class="fa fa-star-o"></i> <span class="margin-left-10">5
                                                    Review(s)</span>
                                            </p>
                                            <div class="price">{{ $itemProduct->price }}
                                                <span>{{ $itemProduct->cost_price }}</span>
                                            </div>
                                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Selling Week -->
    <section class="padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                {{-- <h2>From our Blog</h2> --}}
                <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                    <li role="presentation" class="active"><a href="#111_tab" aria-controls="111_tab" role="tab"
                            data-toggle="tab">From our Blog</a></li>
                </ul>
                {{-- <hr> --}}
            </div>
            {{-- <div id="blog-slide" class="with-nav">
                <!-- Blog Post -->
                <div class="blog-post"> --}}
            <div role="tabpanel" class="tab-pane fade in active" id="111_tab">
                <!-- Items Slider -->
                <div class="item-slide-3 with-nav ">
                    @foreach ($listBlog as $itemBlog)
                        <article> <img class="img-responsive" src="{{ secure_asset($itemBlog->image) }}" alt=""> <span><i
                                    class="fa fa-bookmark-o"></i>{{ $itemBlog->time }}</span> <span><i
                                    class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                class="tittle">{{ $itemBlog->title }} </a>
                            <p>{{ $itemBlog->content }}</p>
                            <a href="#.">Readmore</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
        <div class="container">
            <ul>
                <li><img src="{{ secure_asset('assets/images/c-img-1.png') }}" alt=""></li>
                <li><img src="{{ secure_asset('assets/images/c-img-2.png') }}" alt=""></li>
                <li><img src="{{ secure_asset('assets/images/c-img-3.png') }}" alt=""></li>
                <li><img src="{{ secure_asset('assets/images/c-img-4.png') }}" alt=""></li>
                <li><img src="{{ secure_asset('assets/images/c-img-5.png') }}" alt=""></li>
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
@endsection

@section('style')
@endsection

@section('script')
@endsection
