<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        	@include('site_objects.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   @include('site_objects.tabs')
                   @include('site_objects.activity_logs')
                </div>
                <div class="col-md-9">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">Universities</a>
                        </li>

                        <li><a href="#tab2" data-toggle="tab">Add University</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane panel panel-default active" id="tab1">
                            <div class="panel-body">

                            <div class="panel panel-default">

						  <!-- Table -->
						  <table class="table">
						    <tr>
								<td>University of Makati</td>
								<td>Admin1</td>
							</tr>
							<tr>
								<td>University of Harvard</td>
								<td>Admin2</td>
							</tr>
						  </table>
						</div>
                                    
                        <div class="tab-pane panel panel-default" id="tab2">
                            <div class="panel-body">
                                tab2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('site_objects.footer')
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>