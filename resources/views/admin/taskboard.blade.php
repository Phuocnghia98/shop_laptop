@extends('admin.layout.app')
@section('title', ' Admin Smart Tech')
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Taskboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Taskboard</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Planned</strong></h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="body taskboard planned_task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Themeforest update</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 18 Jan</span></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                            <li class="ml-3 bd-highlight">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Sites to review</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 28 Jan</span></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Client Followup</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>It is a long established fact that a reader.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>In</strong> progress</h2>
                    </div>
                    <div class="body taskboard progress_task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Sites to review</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 28 Jan</span></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Client Followup</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>It is a long established fact that a reader.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Completed</strong></h2>
                    </div>
                    <div class="body taskboard completed_task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Themeforest update</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 18 Jan</span></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                            <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                            <li class="ml-3 bd-highlight">
                                                <ul class="list-unstyled team-info margin-0">
                                                    <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle d-flex justify-content-between align-items-center">
                                        <div class="h6 mb-0">Client Followup</div>
                                        <div class="action">
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="dd-content p-15">
                                        <p>It is a long established fact that a reader.</p>
                                        <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                            <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
