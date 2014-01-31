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
                                	<div class="progress progress-striped active">
                <div class="progress-bar" style="width: 75%"></div>
              </div>
                                    <h4><strong><center>EMPLOYMENT DETAILS
                                    </center></strong></h4>
                                    <div class="form-group col-md-8">
                                        <label><h5><b>Job Position</b></h5> 
                                        <input type="text"><br></label>
                                    	<label><h5><b>Company</b></h5> 
                                        <input type="text"><br></label>
                                        <label><h5><b>Salary</b></h5> 
                                        <input type="text"><br></label>
                                    	<label><h5><b>
                                    	Type of Employment
                                    	</b></h5> 
                                    	<input type="radio" 
                                        value="fulltime"> Full Time<br>
                                    	<input type="radio" 
                                        value="parttime"> Part Time<br>
                                        <input type="radio" 
                                        value="casual"> Casual<br>
                                        <input type="radio" 
                                        value="contractual"> Contractual<br><br>
                                    	<button onclick=location.href="register_alumni_pg4" 
                                    	type="button" 
                                    	class="btn btn-primary btn-sm col-md-offset-12">
                                    	<i class="fa fa-arrow-circle-o-right">	
                                    	</i> Next</button>
                                	</div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('site_objects.alumni.footer')
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>