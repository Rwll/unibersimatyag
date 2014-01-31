<!DOCTYPE html>
<html>
    <head>
        <title>Administrator - {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/signin.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        
    </head>
    <body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-4 col-md-offset-4">
		            <div class="account-wall">
		                <img class="profile-img" src="/assets/img/icon.png"
		                    alt="">
		                <h1 class="text-center login-title">
		            	<strong>University Administrator</strong></h1>
		                @if($errors->has())
			                <div class="row">
			                <div class="col-md-10 col-md-offset-1">
	                        <div class="alert alert-danger alert-dismissable">
	                            <button type="button" 
	                            		class="close" 
	                            		data-dismiss="alert" 
	                            		aria-hidden="true">&times;</button>
	                            <ul>
	                                @foreach ($errors->all() as $error)
	                                        <li>{{ $error }}</li>
	                                @endforeach
	                            </ul>
	                        </div>
	                        </div>
	                        </div>
                		@endif


                        <form id="login" class="form-signin" 
                        action="{{ URL::Route('uadmin-login-go') }}" 
                        method="post">
		                <input name="username" 
		                	   type="text" 
		                	   class="form-control" 
		                	   placeholder="Username"
							   required
							   autofocus>
		                <br>
		                <input name="password" 
		                	   type="password" 
		                	   class="form-control" 
		                	   placeholder="Password" 
		                	   required>
		                <br>
		                <button class="btn btn-md btn-warning col-md-offset-4" 
		                		type="submit">Sign in</button>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		{{ HTML::script('assets/js/admin-navigation.js') }}
		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>