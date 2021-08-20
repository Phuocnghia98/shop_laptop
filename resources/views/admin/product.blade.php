@extends('admin.layout.app')
@section('title', ' Admin Smart Tech')
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item">eCommerce</li>
                    <li class="breadcrumb-item active">Product</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <span class="label onsale">Sale!</span>
                        <img src="assets/images/ecommerce/1.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Simple Black Clock</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$52.00</li>
                                <li class="new_price">$45.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/2.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Knit beanie with patch</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$16.00</li>
                                <li class="new_price">$13.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/3.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Printed color block T-shirt</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$341.00</li>
                                <li class="new_price">$313.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/4.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Simple Black Clock</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$16.00</li>
                                <li class="new_price">$13.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <span class="label new">New!</span>
                        <img src="assets/images/ecommerce/5.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Simple Black Clock</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$89.00</li>
                                <li class="new_price">$66.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <span class="label trending">Trending!</span>
                        <img src="assets/images/ecommerce/6.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Simple Black Clock</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$16.00</li>
                                <li class="new_price">$13.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/7.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Habitasse dictumst</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$206.00</li>
                                <li class="new_price">$113.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/8.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Backpack with tab detail</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$189.00</li>
                                <li class="new_price">$143.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/9.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Faux Fur Stole</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$504.00</li>
                                <li class="new_price">$455.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/10.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Chest-pocket Printed Shirt</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$325.00</li>
                                <li class="new_price">$289.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        <img src="assets/images/ecommerce/11.png" alt="Product" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="ec-product-detail.html">Blend Classic Coat</a>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$99.00</li>
                                <li class="new_price">$79.00</li>
                            </ul>
                        </div>
                        <div class="action">
                            <a href="javascript:void(0);" class="btn btn-info waves-effect"><i class="zmdi zmdi-eye"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
