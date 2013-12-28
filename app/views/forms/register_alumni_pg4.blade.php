<!DOCTYPE html>
<html>
    <head>
        <title>Register Alumni</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        @include('site_objects.alumni.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-offset-5">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Fill up the following fields.
                            </div>
                            <div class="panel-body">
                                <form>
                                    <h4><strong><center>CONTACT DETAILS
                                    </center></strong></h4>
                                    <div class="form-group col-md-8">
                                        <label><h5><b>Mobile Number (639..)
                                        </b></h5> 
                                        <input type="text"><br></label>
                                    	<label><h5><b>Telephone Number</b></h5> 
                                        <input type="text"><br></label>
                                        <label><h5><b>Address</b></h5> 
                                        <input type="text"><br></label>
                                        <label><h5><b>Email</b></h5> 
                                        <input type="text"><br></label>
                                        <label><h5><b>Username</b></h5> 
                                        <input type="text"><br></label>
                                        <label><h5><b>Password</b></h5> 
                                        <input type="password"><br></label>
                                    	<label><h5><b>Confirm Password</b></h5> 
                                        <input type="password"></label><br><br>
                                    	<button data-toggle="modal" 
                                    	data-target="#myModal" 
                                    	type="submit" 
                                    	class="btn btn-primary btn-sm">
                                    	<i class="fa fa-arrow-circle-o-right">	
                                    	</i> Finish and Submit</button>
                                	</div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirm the following information.</h4>
      </div>
      <div class="modal-body">
        <form role="form">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-md-offset-3">
                                            <label><strong>Are you sure you want to submit?</strong></label><br><br>
                                    		<button type="submit" class="btn btn-primary">Yes</button>
                                    		<button type="submit" class="btn btn-danger">No</button>
                                    	</div>
                                    </div>
                                   
                                </form>
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
        </div>
        @include('site_objects.alumni.footer')
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>