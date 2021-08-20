@extends('layout.app')
@section('title', 'Smart Tech')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
@endsection
@section('content')
    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cell Phones & Accessories</li>
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
                            <form action="{{ route('filterProduct') }}" method="POST">
                                @csrf
                                <!-- Categories -->
                                <h6>Categories</h6>
                                <div class="checkbox checkbox-primary">
                                    <ul>
                                        @foreach ($listProductline as $item)
                                            <li>
                                                <input name="fil[{{ $item->product_line }}]"
                                                    id="cate_{{ $item->id_productLine }}" class="styled" type="checkbox"
                                                    value="{{ $item->product_line }}">
                                                <label for="cate{{ $item->id_productLine }}"> {{ $item->product_line }}
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
                                    <span id="price-min" class="price-min">20</span>
                                    <span id="price-max" class="price-max">80</span>
                                    <input type="hidden" name="price-min" id="hf-price-min" value="0">
                                    <input type="hidden" name="price-max" id="hf-price-max" value="0">
                                    <button type="submit" class="btn-round" id="filter-product">Filter</button>
                                </div>

                                <!-- Featured Brands -->
                                <h6>Featured Brands</h6>
                                <div class="checkbox checkbox-primary">
                                    <ul>
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
                                        <li>
                                            <input id="brand10" class="styled" type="checkbox">
                                            <label for="brand10"> HTC <span>(59)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand11" class="styled" type="checkbox">
                                            <label for="brand11"> Lenovo <span>(68)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand12" class="styled" type="checkbox">
                                            <label for="brand12">Sanyo (19) </label>
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
                                <div class="sizes"> <a href="#.">S</a> <a href="#.">M</a> <a href="#.">L</a> <a
                                        href="#.">XL</a>
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
                            </form>
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="col-md-9">

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>Cell Phones & Accessories</h2>
                            <ul>
                                <!-- Short List -->
                                <li>
                                    <p>Showing 1–12 of 756 results</p>
                                </li>
                                <!-- Short  -->
                                <li>
                                    <select class="selectpicker">
                                        <option>Show 12 </option>
                                        <option>Show 24 </option>
                                        <option>Show 32 </option>
                                    </select>
                                </li>
                                <!-- by Default -->
                                <li>
                                    <select class="selectpicker">
                                        <option>Sort by Default </option>
                                        <option>Sort by Default </option>
                                        <option>Sort by Default</option>
                                    </select>
                                </li>

                                <!-- Grid Layer -->
                                <li class="grid-layer"> <a href="#."><i class="fa fa-list margin-right-10"></i></a> <a
                                        href="#."><i class="fa fa-th"></i></a> </li>
                            </ul>
                        </div>

                        <!-- Items -->
                        <div class="col-list">
                            <!-- Product -->
                            @foreach ($listProduct as $item)
                                <div class="product">
                                    <article>
                                        <!-- Product img -->
                                        <div class="media-left">
                                            <div class="item-img"> <img class="img-responsive"
                                                    src="{{ asset($item->image) }}" alt=""> </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-body">
                                            <div class="row">
                                                <!-- Content Left -->
                                                <div class="col-sm-7"> <span class="tag">{{ $item->product_line }}</span>
                                                    <a href="{{ Route('productDetails', ['id_product' => $item->id_product]) }}"
                                                        class="tittle">{{ $item->product_name }}</a>
                                                    <!-- Reviews -->
                                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <span class="margin-left-10">5
                                                            Review(s)</span></p>
                                                    <ul class="bullet-round-list">
                                                        <li>{{ $item->product_description }}</li>
                                                    </ul>
                                                </div>
                                                <!-- Content Right -->
                                                <div class="col-sm-5 text-center"> <a href="#." class="heart"><i
                                                            class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i
                                                            class="fa fa-navicon"></i></a>
                                                    <div class="position-center-center">
                                                        <div class="price">{{ number_format($item->price) }}</div>
                                                        <p>Availability: <span class="in-stock">In stock</span></p>
                                                        {{-- <a href="{{ route('add.to.cart', $item->id_product) }}"
                                                            class="btn-round add-to-cart-btn">
                                                            <i class="icon-basket-loaded"></i> Add to Cart</a> --}}
                                                        <a href="#" data-id="{{ $item->id_product }}"
                                                            class="btn-round add-to-cart-btn">
                                                            <i class="icon-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach


                            <!-- pagination -->
                            {{-- <ul class="pagination">
                                <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                            </ul> --}}
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Your Recently Viewed Items</h2>
                    <hr>
                </div>
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-1.jpg') }}" alt="">
                            <!-- Content -->
                            <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For
                                Playing Game</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00 </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-2.jpg') }}" alt="">
                            <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                                8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-3.jpg') }}" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                                M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-4.jpg') }}" alt="">
                            <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                                Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-5.jpg') }}" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full
                                HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-6.jpg') }}" alt="">
                            <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                                8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-7.jpg') }}" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                                M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/item-img-1-8.jpg') }}" alt="">
                            <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                                Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                    Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
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
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-to-cart-btn').on('click', function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('addtocart.ajax') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        if (data.success) {
                            // alert('Them san pham thanh cong');
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Co loi xay ra khi them san pham');
                    },
                });
            });
        });

        // $(".add-to-cart-btn").click(function(e) {
        //     e.preventDefault();

        //     var ele = $(this);

        //     $.ajax({
        //         url: "{{ route('addtocart.ajax') }}",
        //         method: "POST",
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             id: ele.parents("a").attr("data-id")
        //         }
        //         success: function(response) {
        //             window.location.reload();
        //         }
        //     });
        // });

        // MIN-MAX PRICE
        jQuery(document).ready(function($) {

            //  Price Filter ( noUiSlider Plugin)
            $("#price-range").noUiSlider({
                range: {
                    'min': [0],
                    'max': [2000000]
                },
                start: [0, 500000],
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
                        decimals: 0,
                        // prefix: 'đ'
                    }
                }
            });

            $('#price-min').on('DOMSubtreeModified', function() {
                $('#hf-price-min').val($(this).text());
            })
            $('#price-max').on('DOMSubtreeModified', function() {
                $('#hf-price-max').val($(this).text());
            })
        });
    </script>

    <script src="{{ asset('js/vendors/jquery.nouislider.min.js') }}"></script>
    <script src="{{ asset('js/vendors/modernizr.js') }}"></script>

@endsection
