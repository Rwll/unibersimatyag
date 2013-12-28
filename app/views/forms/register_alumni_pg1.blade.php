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
                                    <h4><strong><center>PERSONAL DETAILS
                                    </center></strong></h4>
                                    <div class="form-group col-md-8">
                                        <label><h5><b>First Name</b></h5> 
                                        <input type="text"><br></label>
                                    	<label><h5><b>Last Name</b></h5> 
                                        <input type="text"><br></label>
                                    	<label><h5><b>Middle Name</b></h5> 
                                        <input type="text"><br><br></label>
                                    	<h5><b>Gender</b></h5>
                                    	<input type="radio" 
                                        value="male"> Male<br>
                                    	<input type="radio" 
                                        value="female"> Female<br><br>
										<h5><b>Civil Status</b></h5>
                                    	<input type="radio" 
                                        value="single"> Single<br>
                                    	<input type="radio" 
                                        value="married"> Married<br>
                                        <input type="radio" 
                                        value="widowed"> Widowed<br>
                                    	<input type="radio" 
                                        value="separated"> Separated<br><br>
                                    	<label><h5><b>Birthday</b></h5>
                                    	<input type="date"></label><br><br>
                                    	<button onclick=location.href="register_alumni_pg2" 
                                    	type="button" 
                                    	class="btn btn-primary btn-sm">
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