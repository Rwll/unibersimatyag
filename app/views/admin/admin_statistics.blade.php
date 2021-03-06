<!DOCTYPE html>
<html>
    <head>
        <title>Statistics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('assets/font-awesome/css/bootstrap.min.css') }}
        {{ HTML::style('assets/font-awesome/css/bootstrap-responsive.min.css') }}
        {{ HTML::style('assets/font-awesome/css/styles.css') }}
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
                <h1>Statistics!</h1>
            </div>

            
        </div>
           
        @include('site_objects.admin.footer')
        {{ HTML::script('assets/js/jquery.js') }}
        {{ HTML::script('assets/js/modernizr-2.6.2-respond-1.1.0.min.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>