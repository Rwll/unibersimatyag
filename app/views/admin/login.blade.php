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
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title"><strong>Administrator</strong></h1>
		            <div class="account-wall">
		                <img class="profile-img" src="assets/img/icon.png"
		                    alt="">
		                
                        <form class="form-signin" action="{{ URL::Route('admin-login-go') }}" method="post">
		                <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
		                <br>
		                <input name="password" type="password" class="form-control" placeholder="Password" required>
		                <button class="btn btn-md btn-primary col-md-offset-4" type="submit">
		                Sign in</button>
		                
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>