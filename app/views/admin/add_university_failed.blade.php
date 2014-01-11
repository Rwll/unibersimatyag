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
                        <div class="panel panel-danger">
              			<div class="panel-heading">
                		<h3 class="panel-title">Failed to register university.</h3>
              			</div>
              			
                        <div class="panel-body">
	                	@if($errors->has())

	                	<div class="alert alert-warning alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Warning!</strong> Best check yo self, you're not looking too good.
						</div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
               		    @endif
	                	</div>
            		    </div>


 						<button onclick=location.href="{{ URL::Route('admin-manage-universities') }}" 
 								class="btn btn-default btn-xs" 
                                data-toggle="modal" data-target="#myModal3">
                                <i class="fa fa-chevron-left fa-fw"></i>
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