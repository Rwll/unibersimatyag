<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        @include('site_objects.uadmin.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                	@include('site_objects.uadmin.tabs')
                    @include('site_objects.uadmin.activity_logs')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                Panel heading without title
                                </div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                Panel heading without title
                                </div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('site_objects.uadmin.footer')
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>