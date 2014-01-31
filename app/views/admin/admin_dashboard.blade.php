<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
    </head>
    <body>
        @include('site_objects.admin.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                	@include('site_objects.admin.tabs')
                    @include('site_objects.admin.activity_logs')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                Panel heading without title
                                </div>
                                <div class="panel-body">
                                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Statistics</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span3">
                                    <div class="chart" data-percent="73">73%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="53">53%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Page Views</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="83">83%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Users</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="13">13%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Orders</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
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
        @include('site_objects.admin.footer')
        {{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
		<script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>
</html>