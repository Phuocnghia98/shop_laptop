@extends('admin.layout.app')
@section('title', ' Admin Smart Tech')
@section('style')
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fullcalendar/fullcalendar.min.css') }}">

@endsection
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Calendar</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="event_list">
                        <button type="button" class="btn btn-info btn-block waves-effect" data-toggle="modal" data-target="#addevent">Add Events</button>
                        <div class="e_list">
                            <h5 class="e_name">11 September <span class="badge badge-primary float-right">Conference</span></h5>
                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            <p class="e_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="e_list">
                            <h5 class="e_name">12 November <span class="badge badge-success float-right">Birthday Party</span></h5>
                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            <p class="e_details">It is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="e_list">
                            <h5 class="e_name">16 December <span class="badge badge-danger float-right">Repeating</span></h5>
                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                            <p class="e_details">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ asset('admin/assets/js/pages/calendar/calendar.js') }}"></script>
<script src="{{  asset('admin/assets/bundles/fullcalendarscripts.bundle.js') }}"></script>

@endsection

