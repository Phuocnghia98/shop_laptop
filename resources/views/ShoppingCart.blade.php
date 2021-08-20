
@extends('layout.app')
@section('title', 'Smart Tech')
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">

                    <!-- Step 1 -->
                    <li class="col-sm-3 current">
                        <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                        <div class="media-body"> <span>Step 1</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>

                    <!-- Step 2 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="flaticon-business"></i> </div>
                        <div class="media-body"> <span>Step 2</span>
                            <h6>Payment Methods</h6>
                        </div>
                    </li>

                    <!-- Step 3 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
                        <div class="media-body"> <span>Step 3</span>
                            <h6>Delivery Methods</h6>
                        </div>
                    </li>

                    <!-- Step 4 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="fa fa-check"></i> </div>
                        <div class="media-body"> <span>Step 4</span>
                            <h6>Confirmation</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th class="text-center">Product Code</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total Price </th>
                            <th>&nbsp; </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $sub_total = 0;
                        @endphp
                        @if (session('cart'))

                            @foreach (session('cart') as $id => $value)
                                @php
                                    $total += $value['price'] * $value['quantity'];
                                    $sub_total = $value['price'] * $value['quantity'];
                                @endphp
                                <tr data-id="{{ $value['id_product'] }}">
                                    <td>
                                        <div class="media">
                                            <div class="media-left"> <a href="#."> <img class="img-responsive"
                                                        src="{{ asset($value['image']) }}" alt=""> </a> </div>
                                            <div class="media-body">
                                                <p>{{ $value['product_name'] }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center padding-top-60">{{ $value['product_code'] }}</td>

                                    <td class="text-center padding-top-60">{{ number_format($value['price']) }}</td>
                                    <td class="text-center">
                                        <!-- Quinty -->

                                        <div class="quinty padding-top-20">
                                            <input type="number" id="" name="quantity[{{ $value['id_product'] }}]" min="1"
                                                max="10" data-id="{{ $value['id_product'] }}"
                                                value="{{ $value['quantity'] }}" class="num-order quantity update-cart">
                                        </div>
                                    </td>
                                    <td id="sub-total-{{ $value['id_product'] }}" class="text-center padding-top-60">
                                        {{ number_format($sub_total) }}</td>
                                    <td class="text-center padding-top-60"><a href="#"
                                            data-id="{{ $value['id_product'] }}" class="remove"><i
                                                class="fa fa-close"></i></a></td>
                                </tr>
                            @endforeach
                        @endif
                        <!-- Item Cart -->
                    </tbody>
                </table>

                <!-- Promotion -->
                <div class="promo">
                    <div class="coupen">
                        <label> Promotion Code
                            <input type="text" placeholder="Your code here">
                            <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                        </label>
                    </div>

                    <!-- Grand total -->
                    <div class="g-totel">
                        <h5>Grand total: <span>{{ number_format($total) }}</span></h5>
                    </div>

                    <!-- Payout Method -->
                    <div class="pay-method check-out">
                        <!-- Delivery infomation -->
                        <div class="heading margin-top-50">
                            <h2>Delivery infomation</h2>
                            <hr>
                        </div>
                        @foreach ($listCustomer as $item)
                            <input type="radio" name="payment" class="customer_infor" value="{{ $item->id_customers }}">

                            <!-- Information -->
                            <ul class="row check-item infoma">
                                <li class="col-sm-3">
                                    <h6>Name</h6>
                                    <span>{{ $item->customer_name }}</span>
                                </li>
                                <li class="col-sm-3">
                                    <h6>Phone</h6>
                                    <span>{{ $item->phone }}</span>
                                </li>
                                <li class="col-sm-3">
                                    <h6>Country</h6>
                                    <span>{{ $item->country }}</span>
                                </li>
                                {{-- <li class="col-sm-3">
                                    <h6>Email</h6>
                                    <span>Alexadkins@gmail.com</span>
                                </li> --}}
                                <li class="col-sm-3">
                                    <h6>City</h6>
                                    <span>{{ $item->city }}</span>
                                </li>
                                <li class="col-sm-3">
                                    <h6>State</h6>
                                    <span>{{ $item->state }}</span>
                                </li>
                                {{-- <li class="col-sm-3">
                                    <h6>Zipcode</h6>
                                    <span>01234</span>
                                </li> --}}
                                <li class="col-sm-3">
                                    <h6>Address</h6>
                                    <span>{{ $item->address_line1 }}</span>
                                </li>
                            </ul>
                        @endforeach


                        <!-- Information -->
                        <a class="btn-round" href="{{ route('add.customer.info') }}">Thêm địa chỉ nhận hàng</a>

                        <!-- Totel Price -->
                        <div class="totel-price">
                            <h4><small> Total Price: </small> {{ number_format($total) }}</h4>
                        </div>
                    </div>

                </div>

                <!-- Button -->
                @if (Auth::check())
                    <div class="pro-btn"> <a href="#." class="btn-round btn-light">Continue Shopping</a> <a href=""
                            class="btn-round" id="payment">Payment</a> </div>
                @else
                    <div class="pro-btn">
                        <a class="btn-round" href="{{ route('login2') }}">Login</a>
                    </div>
                @endif


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
        // $(document).ready(function() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('.remove').on('click', function(e) {
        //         e.preventDefault();

        //         var id = $(this).data('id');

        //         $.ajax({
        //             url: "{{ route('removecart.ajax') }}",
        //             type: 'POST',
        //             dataType: 'json',
        //             data: {
        //                 id: id,
        //             },
        //             success: function(data) {
        //                 if (data.success) {
        //                     alert('Xoa san pham thanh cong');
        //                     location.reload();
        //                 } else {
        //                     alert('Khong ton tai san pham trong gio hang');
        //                 }
        //             },
        //             error: function() {
        //                     alert('Co loi xay ra khi xoa san pham');
        //             },
        //         });
        //     });
        // });

        $(".remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            // if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: "{{ route('removecart.ajax') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
            // }
        });


        // $(document).ready(function() {
        //     $(".num-order").click(function() {
        //         var id = $(this).data('id');
        //         var quantity = $(this).val();
        //         // var num = $("#num").val();
        //         var data = { id: id, quantity: quantity };

        //         $.ajax({
        //             url: "{{ route('updatecart.ajax') }}",
        //             method: 'POST',
        //             data: data,
        //             dataType: 'json',
        //             success: function(data) {
        //                 $("#sub-total-" + id_product).text(data.sub_total);
        //                 console.log(data);
        //             },
        //             error: function(xhr, ajaxOption, thrownError) {
        //                 alert(xhr.status);
        //                 alert(thrownError);
        //             }
        //         });
        //     });
        // });

        // $(document).ready(function(){
        //     $(".num-order").change(function(){
        //         var id = $(this).data('id');
        //         var quantity = $(this).val();
        //         $.ajax({
        //             method: 'POST',
        //             url: "{{ route('updatecart.ajax') }}",
        //             dataType: 'json',
        //             data: {
        //                 id: id, quantity: quantity
        //             },
        //             success:function(data){
        //                 // $("#sub-total-" + id_product).text(data);
        //                 // console.log(data);
        //                 if(data.success){
        //                     location.reload();

        //                 }


        //             }
        //         });
        //     });
        // });

        // $(document).ready(function() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('.num-order').on('click', function(e) {
        //         e.preventDefault();

        //         var id = $(this).data('id');
        //         // var quantity = $(this).val();

        //         $.ajax({
        //             url: "{{ route('updatecart.ajax') }}",
        //             type: 'POST',
        //             dataType: 'json',
        //             data: {
        //                 id: id
        //             },
        //             success: function(data) {
        //                 if (data.success) {
        //                     alert('Cập nhật sản pham thanh cong');
        //                     location.reload();
        //                 } else {
        //                     alert('Khong ton tai san pham trong gio hang');
        //                 }
        //             },
        //             error: function() {
        //                     alert('Co loi xay ra khi cập nhật san pham');
        //             },
        //         });
        //     });
        // });

        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: "{{ route('updatecart.ajax') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $("#payment").on("click", function(e) {
            e.preventDefault();
            if (!$(".customer_infor").prop("checked")) {
                alert('Cần chọn địa chỉ nhận hàng');
                return
            }

            $.ajax({
                url: "{{ route('payment') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    cus: $(".customer_infor").val(),
                },
                success: function(response) {
                    window.location.href = "{{ route('ShowOrder') }}";
                }
            });

            // alert('Đã đặt hàng thành công');


        });
    </script>
@endsection
