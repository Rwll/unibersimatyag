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
	        <ul class="nav nav-tabs">
            <div class="tab-pane panel panel-default" id="tab1">
                <div class="panel-body">
                    <form id="adduniversity" class="form-horizontal" role="form" method="post">
                        <div class="panel panel-warning">
              			<div class="panel-heading">
                		<h3 class="panel-title">Added Successfully!</h3>
              			</div>
              			
                        <div class="panel-body">
	                	
	                	</div>
            		    </div>


 						<button onclick=location.href="{{ URL::Route('admin-manage-universities') }}" 
 								class="btn btn-warning btn-xs" 
                                data-toggle="modal" data-target="#myModal3">
                            Go back!
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        @include('site_objects.admin.footer')

        {{ HTML::script('assets/js/admin-navigation.js') }}
        {{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>