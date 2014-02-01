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
            	<div class="container">
                <form action="update_university" id="updateuniversity" class="form-horizontal" role="form" method="post">
                        
                        <div class="form-group">
                        	<br>
                            <h1>Update University Information</h1>
                        	<br>
                            <label for="name" class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-4">
                                <input type="text" 
                                	   name="name" 
                                	   class="form-control" 
                                	   id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Website: </label>
                            <div class="col-sm-4">
                                <input type="text" name="website" class="form-control" id="website">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email: </label>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-sm-2 control-label">Contact Number: </label>
                            <div class="col-sm-4">
                                <input type="text" name="contact_number" class="form-control" id="contact">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Address: </label>
                            <div class="col-sm-4">
                                <input type="text" name="address" class="form-control" id="address">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Description: </label>
                            <div class="col-sm-4">
                        		<textarea  name="description" class="form-control" 
            						rows="3"></textarea>
            				</div>
            			</div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary btn-xs" 
                                        data-toggle="modal" data-target="#myModal3">
                                        <i class="fa fa-plus fa-fw" ></i>
                                    Save Changes
                                </button>

                                <button class="btn btn-warning btn-xs" 
                                        data-toggle="modal" data-target="#myModal3">
                                        <i class="fa fa-plus fa-fw" ></i>
                                    Reset
                                </button>
                                    
                            </div>
                        </div>
                      
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