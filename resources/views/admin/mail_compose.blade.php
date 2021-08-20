@extends('admin.layout.app')
@section('title', ' Admin Smart Tech')
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Compose</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item"><a href="mail-inbox.html">Inbox</a></li>
                    <li class="breadcrumb-item active">Compose</li>
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
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="mobile-left">
                        <a class="btn btn-info btn-icon toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                            <span class="btn-label"><i class="zmdi zmdi-more"></i></span>
                        </a>
                    </div>
                    <div class="inbox left" id="email-nav">
                        <div class="mail-compose mb-4">
                            <a href="javascript:void(0);" class="btn btn-danger btn-block">Compose</a>
                        </div>
                        <div class="mail-side">
                            <ul class="nav">
                                <li class="active"><a href="mail-inbox.html"><i class="zmdi zmdi-inbox"></i>Inbox<span class="badge badge-primary">6</span></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-mail-send"></i>Sent</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-badge-check"></i>Important </a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-file"></i>Draft<span class="badge badge-info">3</span></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-email"></i>All Mail</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-alert-circle"></i>Spam<span class="badge badge-warning">6</span></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i>Trash<span class="badge badge-danger">9</span></a></li>
                            </ul>
                            <h3 class="label">Labels</h3>
                            <ul class="nav">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-danger"></i>UI Project<span class="badge badge-primary">5</span></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-info"></i>Marketing</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-dark"></i>Payout</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label text-primary"></i>Meeting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inbox right">
                        <div class="card">
                            <div class="body mb-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="To" />
                                </div>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                            </div>
                            <div class="body">
                                <div class="summernote">
                                    Hello there,
                                    <br/>
                                    <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                    <p>Please try <b>paste some texts</b> here</p>
                                </div>
                                <button type="button" class="btn btn-info waves-effect m-t-20">SEND</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
