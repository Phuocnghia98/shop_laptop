<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: 404</title>
@include('admin.layout.style')
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form">
                    <div class="header">
                        <img class="logo" src="{{ asset('admin/assets/images/logo.svg') }}" alt="">
                        <h5>Error 404</h5>
                        <span>Page not found</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                            </div>
                        </div>
                        <a href="index.html" class="btn btn-primary btn-block waves-effect waves-light">GO TO HOMEPAGE</a>
                        <div class="signin_with mt-3">
                            <a href="javascript:void(0);" class="link">Need Help?</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="templatespoint.net">Templates Point</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ asset('admin/assets/images/404.svg') }}" alt="404" />
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.script')
</body>

</html>
