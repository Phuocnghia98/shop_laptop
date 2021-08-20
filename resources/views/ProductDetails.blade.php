@php
use Carbon\Carbon;
@endphp
@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
<!-- Linking -->
<div class="linking">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Cell Phones & Accessories</a></li>
            <li class="active">Power Smartphone 7s Silver 128GB/ Camera 7.5”</li>
        </ol>
    </div>
</div>
<!-- Content -->
<div id="content">
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">
                <!-- Shop Side Bar -->
                <div class="col-md-3">
                    <div class="shop-side-bar">
                        <!-- Categories -->
                        <h6>Categories</h6>
                        <div class="checkbox checkbox-primary">
                            <ul>
                                @foreach ($listProductline as $item)
                                    <li>
                                        <input id="cate_{{ $item->id_productLine }}" class="styled" type="checkbox">
                                        <label for="cate_{{ $item->id_productLine }}"> {{ $item->product_line }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Categories -->
                        <h6>Price</h6>
                        <!-- PRICE -->
                        <div class="cost-price-content">
                            <div id="price-range" class="price-range"></div>
                            <span id="price-min" class="price-min">20</span> <span id="price-max"
                                class="price-max">80</span> <a href="#." class="btn-round">Filter</a>
                        </div>
                        <!-- Featured Brands -->
                        <h6>Featured Brands</h6>
                        <div class="checkbox checkbox-primary">
                            <ul>
                                {{-- @foreach ($listProductHot as $itemProductHot)
                                        <li>
                                            <input id="brand_{{ $itemProductHot->id_product }}" class="styled" type="checkbox">
                                            <label for="brand_{{ $itemProductHot->id_product }}"> {{ $itemProductHot->product_name }} <span>(217)</span> </label>
                                        </li>
                                    @endforeach --}}
                                <li>
                                    <input id="brand1" class="styled" type="checkbox">
                                    <label for="brand1"> Apple <span>(217)</span> </label>
                                </li>
                                <li>
                                    <input id="brand2" class="styled" type="checkbox">
                                    <label for="brand2"> Acer <span>(79)</span> </label>
                                </li>
                                <li>
                                    <input id="brand3" class="styled" type="checkbox">
                                    <label for="brand3"> Asus <span>(283)</span> </label>
                                </li>
                                <li>
                                    <input id="brand4" class="styled" type="checkbox">
                                    <label for="brand4">Samsung <span>(116)</span> </label>
                                </li>
                                <li>
                                    <input id="brand5" class="styled" type="checkbox">
                                    <label for="brand5"> LG <span>(29)</span> </label>
                                </li>
                                <li>
                                    <input id="brand6" class="styled" type="checkbox">
                                    <label for="brand6"> Electrolux <span>(179)</span> </label>
                                </li>
                                <li>
                                    <input id="brand7" class="styled" type="checkbox">
                                    <label for="brand7"> Toshiba <span>(38)</span> </label>
                                </li>
                                <li>
                                    <input id="brand8" class="styled" type="checkbox">
                                    <label for="brand8"> Sharp <span>(205)</span> </label>
                                </li>
                                <li>
                                    <input id="brand9" class="styled" type="checkbox">
                                    <label for="brand9"> Sony <span>(35)</span> </label>
                                </li>
                            </ul>
                        </div>
                        <!-- Rating -->
                        <h6>Rating</h6>
                        <div class="rating">
                            <ul>
                                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i> <span>(218)</span></a></li>
                                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i> <span>(178)</span></a></li>
                                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i> <span>(79)</span></a></li>
                                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i> <span>(188)</span></a></li>
                            </ul>
                        </div>
                        <!-- Colors -->
                        <h6>Size</h6>
                        <div class="sizes"> <a href="#.">S</a> <a href="#.">M</a> <a href="#.">L</a> <a href="#.">XL</a>
                        </div>
                        <!-- Colors -->
                        <h6>Colors</h6>
                        <div class="checkbox checkbox-primary">
                            <ul>
                                <li>
                                    <input id="colr1" class="styled" type="checkbox">
                                    <label for="colr1"> Red <span>(217)</span> </label>
                                </li>
                                <li>
                                    <input id="colr2" class="styled" type="checkbox">
                                    <label for="colr2"> Yellow <span> (179) </span> </label>
                                </li>
                                <li>
                                    <input id="colr3" class="styled" type="checkbox">
                                    <label for="colr3"> Black <span>(79)</span> </label>
                                </li>
                                <li>
                                    <input id="colr4" class="styled" type="checkbox">
                                    <label for="colr4">Blue <span>(283) </span></label>
                                </li>
                                <li>
                                    <input id="colr5" class="styled" type="checkbox">
                                    <label for="colr5"> Grey <span> (116)</span> </label>
                                </li>
                                <li>
                                    <input id="colr6" class="styled" type="checkbox">
                                    <label for="colr6"> Pink<span> (29) </span></label>
                                </li>
                                <li>
                                    <input id="colr7" class="styled" type="checkbox">
                                    <label for="colr7"> White <span> (38)</span> </label>
                                </li>
                                <li>
                                    <input id="colr8" class="styled" type="checkbox">
                                    <label for="colr8">Green <span>(205)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Products -->
                <div class="col-md-9">
                    <div class="product-detail">
                        <div class="product">
                            <div class="row">
                                <!-- Slider Thumb -->
                                <div class="col-xs-5">
                                    <article class="slider-item on-nav">

                                        <div id="slider" class="flexslider">
                                            <ul class="slides">
                                                @foreach ($product as $item)
                                                    <li>
                                                        <img src="{{ asset($item->image) }}" alt="">
                                                    </li>
                                                @endforeach

                                                <!-- items mirrored twice, total of 12 -->
                                            </ul>
                                        </div>
                                        <div id="carousel" class="flexslider">
                                            <ul class="slides">
                                                @foreach ($listimage as $item)
                                                    <li>
                                                        <img src="{{ asset($item->image) }}" alt="">
                                                    </li>
                                                @endforeach

                                                <!-- items mirrored twice, total of 12 -->
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Item Content -->
                                <div class="col-xs-7">
                                    @foreach ($product as $item)
                                        <span class="tags">{{ $item->product_line }}</span>
                                        <h5>{{ $item->product_name }}</h5>
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span class="margin-left-10">5
                                                Review(s)</span>
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6"><span class="price">{{ $item->price }}</span></div>
                                            {{-- <div class="col-sm-6">
                                                <p>Availability: <span class="in-stock">In stock</span></p>
                                            </div> --}}
                                        </div>
                                        <!-- List Details -->
                                        <ul class="bullet-round-list">
                                            <li>{{ $item->product_description }}</li>
                                            {{-- <li>Processor: 2.5 GHz None</li>
                                            <li>RAM: 8 GB</li>
                                            <li>Hard Drive: Flash memory solid state</li>
                                            <li>Graphics : Intel HD Graphics 520 Integrated</li>
                                            <li>Card Description: Integrated</li> --}}
                                        </ul>
                                        <!-- Colors -->
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="clr"> <span style="background:#068bcd"></span> <span
                                                        style="background:#d4b174"></span> <span
                                                        style="background:#333333"></span> </div>
                                            </div>
                                            <!-- Sizes -->
                                            <div class="col-xs-7">
                                                <div class="sizes"> <a href="#.">S</a> <a class="active" href="#.">M</a>
                                                    <a href="#.">L</a> <a href="#.">XL</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Compare Wishlist -->
                                        <ul class="cmp-list">
                                            <li><a href="#."><i class="fa fa-heart"></i> Add to Wishlist</a></li>
                                            <li><a href="#."><i class="fa fa-navicon"></i> Add to Compare</a></li>
                                            <li><a href="#."><i class="fa fa-envelope"></i> Email to a friend</a></li>
                                        </ul>
                                        <!-- Quinty -->
                                        <div class="quinty">
                                            <input type="number" value="01">
                                        </div>
                                        <a href="#." class="btn-round"><i class="icon-basket-loaded margin-right-5"></i>
                                            Add
                                            to Cart</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- Details Tab Section-->
                        <div class="item-tabs-sec">
                            <!-- Nav tabs -->
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active"><a href="#pro-detil" role="tab"
                                        data-toggle="tab">Product Details</a></li>
                                <li role="presentation"><a href="#cus-rev" role="tab" data-toggle="tab">Customer
                                        Reviews</a></li>
                                <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping &
                                        Payment</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
                                    <!-- List Details -->
                                    <ul class="bullet-round-list">
                                        <li>{{ $item->product_description }}</li>
                                        {{-- <li> 2G bands: GSM 850 / 900 / 1800 / 1900 3G bands: HSDPA 850 / 900 / 1900 /
                                                2100 4G bands: LTE 700 / 800 / 850<br>
                                                900 / 1800 / 1900 / 2100 / 2600
                                            </li>
                                            <li> Dimensions: 142.4 x 69.6 x 7.9 mm (5.61 x 2.74 x 0.31 in) Weight 152 g
                                                (5.36 oz)</li>
                                            <li> IP68 certified - dust proof and water resistant over 1.5 meter and 30
                                                minutes</li>
                                            <li> Internal: 128GB, 4 GB RAM </li> --}}
                                    </ul>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Carrier</th>
                                                    <th>Compatibility Rating </th>
                                                    <th>Voice / Text </th>
                                                    <th>Voice / Text </th>
                                                    <th>2G Data </th>
                                                    <th>3G Data </th>
                                                    <th>4G LTE Data </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>AT&T </td>
                                                    <td>Fully Compatible</td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"></td>
                                                </tr>
                                                <tr>
                                                    <td>Sprint </td>
                                                    <td>No Voice/Text and Partial Data Connection</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Q-Mobile </td>
                                                    <td>Partial Data Connection</td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Verizon Wireless </td>
                                                    <td>No Votice/Text and Partial Data Connection</td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
                                <div role="tabpanel" class="tab-pane fade" id="ship"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Related Products -->
                    <section class="padding-top-30 padding-bottom-0">
                        <!-- heading -->
                        <div class="heading">
                            <h2>Related Products</h2>
                            <hr>
                        </div>
                        <!-- Items Slider -->
                        <div class="item-slide-4 with-nav">
                            <!-- Product -->
                            @foreach ($product as $item)
                                @foreach ($listProduct as $itemProduct)
                                    @if ($itemProduct->product_line == $item->product_line)
                                        <div class="product">
                                            <article>
                                                <img class="img-responsive" src="{{ asset($itemProduct->image) }}"
                                                    alt="">
                                                <!-- Content -->
                                                <span class="tag">{{ $itemProduct->product_line }}</span> <a
                                                    href="#." class="tittle">{{ $itemProduct->product_name }}</a>
                                                <!-- Reviews -->
                                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                        class="fa fa-star-o"></i> <span class="margin-left-10">5
                                                        Review(s)</span>
                                                </p>
                                                <div class="price">{{ $itemProduct->price }}</div>
                                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Your Recently Viewed Items -->
    <section class="padding-bottom-60">
        <div class="container">
            <!-- heading -->
            <div class="heading">
                <h2>Other Product Items </h2>
                <hr>
            </div>
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav">
                <!-- Product -->
                @foreach ($listProductline as $item)
                    @foreach ($listProduct as $itemProduct)
                        @if ($itemProduct->product_line == $item->product_line)
                            <div class="product">
                                <article> <img class="img-responsive" src="{{ asset($item->image) }}" alt="">
                                    {!! $itemProduct->cost_price > $itemProduct->price ? '<span class="sale-tag">-' . round((($itemProduct->cost_price - $itemProduct->price) * 100) / $itemProduct->cost_price) . '%</span>' : '' !!}
                                    {!! Carbon::now()->diffInHours($itemProduct->created_at) < 24 ? '<span class="new-tag">New</span>' : '' !!}
                                    <span class="tag">{{ $itemProduct->product_line }}</span> <a href="#."
                                        class="tittle">{{ $itemProduct->product_name }}</a>
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
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
    jQuery(document).ready(function($) {

        //  Price Filter ( noUiSlider Plugin)

        $("#price-range").noUiSlider({

            range: {

                'min': [0],

                'max': [1000]

            },

            start: [40, 940],

            connect: true,

            serialization: {

                lower: [

                    $.Link({

                        target: $("#price-min")

                    })

                ],

                upper: [

                    $.Link({

                        target: $("#price-max")

                    })

                ],

                format: {

                    // Set formatting

                    decimals: 2,

                    prefix: '$'

                }

            }

        })

    })
</script>
<script src="{{ asset('assets/js/vendors/jquery.nouislider.min.js') }}"></script>

@endsection
