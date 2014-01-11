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
	                <a href="#tab1" data-toggle="tab">
	                <i class="fa fa-building fa-fw" ></i> University Listings</a>
	            </li>
	            <li>
	            	<a href="#tab2" data-toggle="tab">
	            	<i class="fa fa-list-alt fa-fw" ></i> Add University</a>
	            </li>
	        </ul>

        <div class="tab-content">

            <div class="tab-pane panel panel-default active" id="tab1">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <!-- Table -->
                        <table id="universities" class="table table-hover">
                            <tr>
                            	<th>ID</th>
                                <th>College/University Name</th>
                                <th>Website</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Options</th>
                            </tr>
                            @foreach($universities as $universityList)
                            <tr>
                                <td>{{ $universityList->id }}</td>
                                <td>{{ $universityList->name }}</td>
                                <td>{{ $universityList->website }}</td>
                                <td>{{ $universityList->email }}</td>
                                <td>{{ $universityList->address }}</td>
                                <td>
				                  <div class="btn-group">
					                  <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown"><span class="caret"></span></button>
					                  <ul class="dropdown-menu">
					                    <li><a href="#">Update Details</a></li>
					                    <li><a href="#">Post an announcement</a></li>
					                    <li><a href="#">Disable University</a></li> 
					                  </ul>
				                  </div><!-- /btn-group -->
				            @endforeach
                                     

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Info</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Name: </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="website" class="col-sm-2 control-label">Website: </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="website">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="col-sm-2 control-label">Email: </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact" class="col-sm-2 control-label">Contact Number: </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="contact">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address" class="col-sm-2 control-label">Address: </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address" class="col-sm-2 control-label">Description: </label>
                                                            <div class="col-sm-6">
                                                        		<textarea class="form-control" 
                                            						rows="3"></textarea>
                                            				</div>
                                            			</div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-xs">Save changes</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                       

                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" 
                                        class="close" data-dismiss="modal" 
                                        aria-hidden="true">
                                        &times;
                                        </button>
                                        <h4 class="modal-title" 
                                        id="myModalLabel">
                                        Are you sure you want to disable this university?
                                        </h4>
                                        <br>
                                        <br>

                                        <div class="modal-footer">
                                            <button type="button" 
                                            class="btn btn-danger btn-xs">
                                            Yes
                                            </button>
                                            <button type="button" 
                                            class="btn btn-primary btn-xs" 
                                            data-dismiss="modal">
                                            No
                                            </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>   
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane panel panel-default" id="tab2">
                <div class="panel-body">
                    <form action="add_university" id="adduniversity" class="form-horizontal" role="form" method="post">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name: </label>
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
                                        <i class="fa fa-plus fa-fw" ></i>
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