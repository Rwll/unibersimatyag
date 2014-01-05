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
	            <li class="active">
	                <a href="#tab1" data-toggle="tab">Universities</a>
	            </li>
	            <li>
	            	<a href="#tab2" data-toggle="tab">Add University</a>
	            </li>
	        </ul>

        <div class="tab-content">

            
            <div class="tab-pane panel panel-default" id="tab2">
                <div class="panel-body">
                    <form action="add_university" id="adduniversity" class="form-horizontal" role="form" method="post">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">failed</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Website: </label>
                            <div class="col-sm-6">
                                <input type="text" name="website" class="form-control" id="website">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email: </label>
                            <div class="col-sm-6">
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-sm-2 control-label">Contact Number: </label>
                            <div class="col-sm-6">
                                <input type="text" name="contact_number" class="form-control" id="contact">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Address: </label>
                            <div class="col-sm-6">
                                <input type="text" name="address" class="form-control" id="address">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Description: </label>
                            <div class="col-sm-6">
                        		<textarea  name="description" class="form-control" 
            						rows="3"></textarea>
            				</div>
            			</div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary btn-xs" 
                                        data-toggle="modal" data-target="#myModal3">
                                    Add University
                                    </button>
                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to add this university?</h4>
                                                    <br><br>
                                                    <div class="modal-footer">
                                                        <button id="addform" type="submit" class="btn btn-primary btn-xs">Yes</button>
                                                        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
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