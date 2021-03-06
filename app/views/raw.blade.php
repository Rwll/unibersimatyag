<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Alumni Tracking</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-wrench fa-fw"></i>  Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- / Container -->
        </nav>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="admin_index" class="list-group-item active">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        <a href="admin_conversations" class="list-group-item">
                        <i class="fa fa-comments-o fa-fw"></i> Conversations</a>
                        <a href="admin_manage_universities" class="list-group-item">
                        <i class="fa fa-gears fa-fw"></i> Manage Universities</a>
                        <a href="#" class="list-group-item">
                        <i class="fa fa-gears fa-fw"></i> Manage Alumni</a>
                        <a href="#" class="list-group-item">
                        <i class="fa fa-group fa-fw"></i> Manage Administrators</a>
                        <a href="#" class="list-group-item">
                        <i class="fa fa-signal fa-fw"></i> Statistics</a>
                        <a href="#" class="list-group-item">
                        <i class="fa fa-bell-o fa-fw"></i> Broadcasts</a>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-tasks fa-fw"></i> Activity Logs
                        </div>
                        <div class="panel-body">
                            <div id="activityLogs" style="max-height:300px;overflow:auto;">
                                <p>
                                    <small class="text-success">
                                    <i class="fa fa-square fa-fw"></i> admin1 logged in </small>
                                    <br>
                                    <small class="text-muted"><i>11/12/13 01:21:32</i></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Panel heading without title</div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Panel heading without title</div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="height:100px;">
            <hr>
            Copyright @ 2013
        </div>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>